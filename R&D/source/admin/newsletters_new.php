<?php
require_once 'config.php';
//login_required();
$tab = 'nl';

if(isset($_POST['submitted'])) {
	$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
	if(isset($_POST['visible'])) {$visible = 1;}else{$visible = 0;}
	$sql = "INSERT INTO NEWSLETTERS (name, description, visible) VALUES ( '".$_POST['name']."' , '".$_POST['description']."', '$visible' )";
	$stmt = $link->query($sql) or die ($link->error);
	$stmt->close;
	$_SESSION['success'] = "Added newsletter";
	header('Location: newsletters.php');
}
$title = 'new newsletter';
$content = <<<EOF
<form action="newsletters_new.php" method='POST'> 
	<p>
		<label for="name">Name:</label><br />
		<input type='text' name='name' class="text" /> 
	</p>
	<p>
		<label for="description">Description:</label>
		<input type="text" name="description" class="text" /> 
	</p>
	<p>
		<label for="visible">Visible:</label>
		<input type="checkbox" name="visible" value="true" $visible/>
	</p>
	<p>
		<input type='submit' value='Add Newsletter' />
		<input type='hidden' value='1' name='submitted' /> 
	</p>
</form>
EOF;
include 'layout.php';
?>