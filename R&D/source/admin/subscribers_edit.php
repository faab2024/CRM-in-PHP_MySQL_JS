<?php
require_once 'config.php';
login_required();
$tab = 'sub';

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
    $_SESSION['success'] = "Edited subscriber."; 
    header('Location: subscribers.php');
}

$title = "edit newsletter";
$id = (int) $_GET['id'];

$subscriber = query("SELECT * FROM subscribers WHERE id='$id'");
$name = $subscriber[0]['name'];
$email = $subscriber[0]['email'];

$newsletters = query("SELECT * FROM newsletters");
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
$content = <<<EOF
<form action="subscribers_edit.php" method='POST'> 
    <p>
        <label for="name">Name:</label><br />
        <input type='text' name='name' class="text" value="$name" /> 
    </p>
    <p>
        <label for="email">Email</label><br />
        <input type="text" name="email" class="text" value="$email" /> 
    </p>
    <p>
        <strong>Newsletters:</strong><br />
        $subscriptions
    </p>
    <p>
        <input type='submit' value='Edit Subscriber' />
        <input type='hidden' value='1' name='submitted' /> 
        <input type='hidden' value='$id' name='id' />
    </p>
</form>
EOF;
include 'layout.php'; ?>
