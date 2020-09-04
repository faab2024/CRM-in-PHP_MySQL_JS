<?php
require_once 'config.php';
login_required();
$id = (int) $_GET['id']; 
$link = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
$sql = "DELETE FROM subscribers WHERE id=$id LIMIT 1";
$stmt = $link->query($sql) or die($link->error);
$sql = "DELETE FROM subscriptions WHERE subscriber_id=$id";
$stmt = $link->query($sql) or die($link->error);
if($link->affected_rows) {
    $_SESSION['success'] = "Subscriber deleted.";
} else {
    $_SESSION['error'] = 'Nothing deleted.';
}
header('Location: subscribers.php');