<?php
require_once 'config.php';
login_required();
$tab = 'temp';
if(isset($_POST['submitted'])) { 
    $link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
    $sql = "UPDATE templates SET name='".$_POST['name']."', body='".mysql_real_escape_string($_POST['body'])."', columns=".$_POST['columns']." WHERE id=".$_POST['id']."";
    $stmt = $link->query($sql) or die($link->error);
    $stmt->close;
    $_SESSION['success'] = "Edited template."; 
    header('Location: templates.php');
}
$title = "edit template";
$id = (int) $_GET['id'];
$results = query("SELECT * FROM templates WHERE id='".$id."' LIMIT 1");
$name = $results[0]['name'];
$templatedata = stripslashes(htmlspecialchars($results[0]['body']));
$selected1 = ($results[0]['columns'] == "1") ? 'selected="selected"' : '';
$selected2 = ($results[0]['columns'] == "2") ? 'selected="selected"' : '';

$content = <<<EOF
<form action="templates_edit.php" method='POST'> 
    <p>
        <label for="name">Name:</label><br />
        <input type='text' name='name' class="text" value="$name"/> 
    </p>
    <p>
        <label for="columns">Columns</label>
        <select name="columns">
            <option value="1" $selected1>Single Column Layout</option>
            <option value="2" $selected2>Two Column Layout</option>
        </select>
    </p>
    <p>
        <label for="body">Body: (raw html)</label><br />
        Use %content% for a single column layout, %leftcol% and %rightcol% for a two column layout.<br />
        <textarea name="body" rows="35">$templatedata</textarea> 
    </p>
    <p>
        <input type='submit' value='Edit Template' />
        <input type='hidden' value='1' name='submitted' /> 
        <input type='hidden' value='$id' name='id' />
    </p>
</form>
EOF;
include 'layout.php'; ?>