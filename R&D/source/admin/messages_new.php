<?php
require_once 'config.php';
//login_required();
$tab = 'mess';
if(isset($_POST['subject'])) { 
	$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
	$sql = "INSERT INTO messages(subject, template_id) VALUES ('".$_POST['subject']."' , ".$_POST['template'].")";
	$stmt = $link->query($sql) or die($link->error);	
	$i = query("SELECT id FROM messages WHERE subject='".$_POST['subject']."' AND template_id=".$_POST['template']." ");
	$id = $i[0]['id'];
	$stmt->close;
	$_SESSION['success'] = "Added template."; 
	header('Location: messages_new_step2.php?id=' + $id);
}
$title = "new message";
$templates = query("SELECT id,name,columns FROM templates");
$tselect = '<select name="template">';
foreach($templates as $row) {
	$tselect .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
$tselect .= "</select>";
$content = <<<EOF
<form action="messages_new.php" method='POST'> 
	<p>
		<label for="subject">Subject:</label><br />
		<input type='text' name='subject' class="text" /> 
	</p>
	<p>
		<label for="template">Template:</label>
		$tselect
	</p>
	<p>
		<button onclick="">Continue &raquo;</button>
	</p>
</form>
EOF;
include 'layout.php'; ?>
