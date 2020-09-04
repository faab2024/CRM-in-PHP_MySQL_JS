<?php
require_once 'config.php';
login_required();
$title = "new message - step 2";
$tab = 'mess';
$id = (int) $_GET['id'];

$mess = query("SELECT * FROM messages WHERE id=$id");
$message = $mess[0];
$subject = $message['subject'];

$templates = query("SELECT id,name,columns FROM templates");
$tselect = '<select name="template">';
foreach($templates as $row) {
	if($message['template_id'] == $row['id']) {
		$selected = ' selected="selected"';
		if($row['columns'] == "1") {
			$textareas = '<p><label for="body">Body: (raw html)</label><br /><textarea name="body" rows="35"></textarea></p>';
		} else {
			$textareas = '<p><label for="leftcol">Left column: (raw html)</label><br /><textarea name="leftcol" rows="35"></textarea></p>
			<p><label for="rightcol">Right column: (raw html)</label><br /><textarea name="rightcol" rows="35"></textarea></p>';
		}
		
	} else {$selected = '';}
	$tselect .= '<option value="'.$row['id'].'"'.$selected.'>'.$row['name'].'</option>';
}
$tselect .= '</select>';

// Check for a POST
if(isset($_POST['submitted'])) { 
	$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
	$template = query("SELECT columns FROM templates WHERE id=".$message['template_id']);
	if($template[0]['columns'] == "1") {
		$body = mysql_real_escape_string($_POST['body']);
		$sql = "UPDATE messages SET subject='".$_POST['subject']."', leftcol='$body' WHERE id=$id";
	} else {
		$leftcol = mysql_real_escape_string($_POST['leftcol']);
		$rightcol = htmlentities($_POST['rightcol']);
		$sql = "UPDATE messages SET subject='".$_POST['subject']."', leftcol='$leftcol', rightcol='$rightcol' WHERE id=$id";
	}
	$stmt = $link->query($sql) or die($link->error);
	$stmt->close;
	header('Location: messages_new_step3.php?id='.$id);
}

$content = <<<EOF
<form action="messages_new_step2.php?id=$id" method='POST'> 
	<p>
		<label for="subject">Subject:</label><br />
		<input type='text' name='subject' class="text" value="$subject"/> 
	</p>
	<p>
		<label for="template">Template:</label>
		$tselect
	</p>
	$textareas
	<p>
		<input type='submit' value='Continue &raquo;' />
		<input type='hidden' value='1' name='submitted' />
	</p>
</form>
EOF;
include 'layout.php'; ?>