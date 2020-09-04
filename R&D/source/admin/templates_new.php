<?php
require_once 'config.php';
//login_required();
$tab = 'temp';
if(isset($_POST['submitted'])) { 
    $link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
    $sql = "INSERT INTO templates (name, columns, body) VALUES ('".$_POST['name']."' , ".$_POST['columns'].", '".mysql_real_escape_string($_POST['body'])."' )";
    $stmt = $link->query($sql) or die($link->error);
    $stmt->close;
    //$_SESSION['success'] = "Added template."; 
   // header('Location: templates.php');
}
$title = "new template";
$content = <<<EOF
<form action="templates_new.php" method='POST'> 
    <p>
        <label for="name">Name:</label><br />
        <input type='text' name='name' class="text" /> 
    </p>
    <p>
        <label for="columns">Columns</label>
        <select name="columns">
            <option value="1">Single Column Layout</option>
            <option value="2">Two Column Layout</option>
        </select>
    </p>
    <p>
        <label for="description">Body: (raw html)</label><br />
        Use %content% for a single column layout, %leftcol% and %rightcol% for a two column layout.<br />
        <textarea name="body" rows="35"></textarea> 
    </p>
    <p>
        <input type='submit' value='Add Template' />
        <input type='hidden' value='1' name='submitted' /> 
    </p>
</form>
EOF;
include 'layout.php'; ?>
