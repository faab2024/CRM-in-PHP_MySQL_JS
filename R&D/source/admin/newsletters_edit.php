<?php
require_once 'config.php';
login_required();
$tab = 'nl';

if(isset($_POST['submitted'])) {
	$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
	if(isset($_POST['visible'])) {$visible = 1;}else{$visible = 0;}
	$sql = "UPDATE NEWSLETTERS SET name='".$_POST['name']."', description='".$_POST['description']."', visible=".$visible." WHERE id=".$_POST['id']."";
	$stmt = $link->query($sql) or die ($link->error);
	$stmt->close;
	$_SESSION['success'] = "Edited newsletter";
	header('Location: newsletters.php');
}
$title = "edit newsletter";
$id = (int) $_GET['id'];
$results = query("SELECT * FROM newsletters WHERE id='$id' LIMIT 1");
$name = $results[0]['name'];
$description = $results[0]['description'];
$visible = ($results[0]['visible'] == "1") ? 'checked="checked"' : '';
$content = <<<EOF
<form action="newsletters_edit.php" method='POST'> 
    <p>
        <label for="name">Name:</label><br />
        <input type='text' name='name' class="text" value="$name" /> 
    </p>
    <p>
        <label for="description">Description:</label>
        <input type="text" name="description" class="text" value="$description" /> 
    </p>
    <p>
        <label for="visible">Visible:</label>
        <input type="checkbox" name="visible" value="true" $visible/>
    </p>
    <p>
        <input type='submit' value='Edit Newsletter' />
        <input type='hidden' value='1' name='submitted' /> 
        <input type='hidden' value='$id' name='id' />
    </p>
</form>
EOF;
include 'layout.php';
?>