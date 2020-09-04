<?php
// Authentication
function validate_user($username, $pw) {
	if(check_username_and_pw($username, $pw)) {
		header('Location: index.php');
	} else {
		$_SESSION['error'] = "Login failed.";
		header('Location: login.php');
	}
}
function logged_in() {
	if($_SESSION['authorized'] == true) {
		return true;
	} else {
		return false;
	}
	
}
function login_required() {
	if(logged_in()) {
		return true;
	} else {
		header('Location: login.php');
	}
	
}

// MySQL
function query($sql) {
	$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
	
	$stmt = $link->prepare($sql) or die('error');
	$stmt->execute();
	$meta = $stmt->result_metadata();

	while ($field = $meta->fetch_field()) {
		$parameters[] = &$row[$field->name];
	}

	$results = array();
	call_user_func_array(array($stmt, 'bind_result'), $parameters);

	while ($stmt->fetch()) {
		foreach($row as $key => $val) {
			$x[$key] = $val;
		}
		$results[] = $x;
	}

	return $results;
	$results->close();
	$link->close();
}

function count_query($query) {
	$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
	if($stmt = $link->prepare($query)) {
		$stmt->execute();
	    $stmt->bind_result($result);
	    $stmt->fetch();
		return $result;
		$stmt->close();
	}
	$link->close();
}

function check_username_and_pw($u, $pw) {
	$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
	
	$query = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1";
	if($stmt = $link->prepare($query)) {
		$p = md5($pw);
		$stmt->bind_param('ss', $u, $p);
		$stmt->execute();
		$stmt->bind_result($id, $username, $pw);
		if($stmt->fetch()) {
			$_SESSION['authorized'] = true;
			$_SESSION['username'] = $username;
			return true;
		} else {
			return false;
		}
		$stmt->close();		
	}
	$link->close();
}

// Render error messages
function error_messages() {
    $message = '';
    if($_SESSION['success'] != '') {
        $message = '<span class="success" id="message">'.$_SESSION['success'].'</span>';
        $_SESSION['success'] = '';
    }
    if($_SESSION['error'] != '') {
        $message = '<span class="error" id="message">'.$_SESSION['error'].'</span>';
        $_SESSION['error'] = '';
    }
    return $message;
}

// EMAIL
function send_email_to_mass($from, $recipients, $body, $subject) {
    require_once 'swift/lib/swift_required.php'; //require lib

    $transport = Swift_MailTransport::newInstance();
    $mailer = Swift_Mailer::newInstance($transport) or die('Error creating mailer.');
    $message = Swift_Message::newInstance($subject)
        ->setFrom($from)
        ->setTo($recipients)
        ->setBody($body, 'text/html') or die('error here.');
    $result = $mailer->batchSend($message);

    return true;
}