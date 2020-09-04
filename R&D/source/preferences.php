<?php
require_once 'admin/config.php';

if(isset($_POST['submitted'])) { 
    $id = (int) $_POST['id'];
    $link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
    $sql = "UPDATE subscribers SET name='".$_POST['name']."', email='".$_POST['email']."' WHERE id=$id";
    $stmt = $link->query($sql) or die($link->error);
    $stmt->close;

    foreach($_POST['newsletter'] as $n) {
        if($n['exists'] != '1' && $n['subscribe'] == "true") { // If we want to subscribe but the record doesnt exist
            $nlid = $n['nlid'];
            $sql = "INSERT INTO subscriptions (subscriber_id, newsletter_id) VALUES ('$id', '$nlid')";
            $stmt = $link->query($sql) or die($link->error);
            $stmt->close;
        } elseif ($n['exists'] == '1' && $n['subscribe'] != "true") {// Else if we had an exits but we want to unsubscribe
            $subid = $n['subid'];
            $sql = "DELETE FROM subscriptions WHERE id=$subid LIMIT 1";
            $stmt = $link->query($sql) or die($link->error);
            $stmt->close;
        }
    }
    $_SESSION['success'] = "Preferences saved."; 
}

if(isset($_GET['email'])) {$email = $_GET['email']; $display = 'form';} else {$display = 'find';}

$subscriber = query("SELECT * FROM subscribers WHERE email='$email'");
if($subscriber || $display == 'find') {
    $id = $subscriber[0]['id'];
    $name = $subscriber[0]['name'];
    $email = $subscriber[0]['email'];
} else {header('Location: index.php');}

$newsletters = query("SELECT * FROM newsletters WHERE visible=1");
$subs = query("SELECT * FROM subscriptions WHERE subscriber_id='".$id."'");
$subscriptions = '';
foreach($newsletters as $nl) {
    $s = false;
    $subid = '';
    foreach($subs as $sub) {
        if($sub['newsletter_id'] == $nl['id']) {$s = true; $subid = $sub['id'];}
    }
    $checked = ($s == true) ? 'checked="checked"' : '';
    $subscriptions .= '
    <input type="checkbox" name="newsletter['.$nl["id"].'][subscribe]" value="true" '.$checked.'/>
    <label for="newsletter['.$nl["id"].']">'.$nl['name'].'</label>
    <input type="hidden" name="newsletter['.$nl["id"].'][exists]" value="'.$s.'" />
    <input type="hidden" name="newsletter['.$nl["id"].'][nlid]" value="'.$nl['id'].'" />
    <input type="hidden" name="newsletter['.$nl["id"].'][subid]" value="'.$subid.'" /><br />
    ';
} 
$message = error_messages();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>my newsletters - my preferences</title>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    </head>
    <body>
        <div id="header">
            <h1>my newsletters</h1>
        </div>
        <div id="container">
            <h3>my preferences</h3>
            <?php if($display == 'form') {?>
            <form action="preferences.php" method="POST">
                <p>
                    <label for="name">Name:</label><br />
                    <input type='text' name='name' class="text" value="<?php echo $name; ?>"/> 
                </p>
                <p>
                    <label for="email">Email</label><br />
                    <input type="text" name="email" class="text" value="<?php echo $email; ?>"/> 
                </p>
                <p>
                    <strong>Newsletters:</strong><br />
                    <?php echo $subscriptions; ?>
                </p>
                <p>
                    <input type='submit' value='Save my preferences &raquo;' />
                    <input type='hidden' value='1' name='submitted' /> 
                    <input type='hidden' value='<?php echo $id; ?>' name='id' />
                </p>
            </form>
            <?php } else { ?>
            <?php echo $message; ?>
            <form action='preferences.php' method="get">
                <p>
                    <label for="email">Email</label><br />
                    <input type="text" name="email" class="text" /> 
                </p>
                <p>
                    <input type='submit' value='Find &raquo;' />
                </p>

            </form>
            <?php } ?>
        </div>
    </body>
</html>