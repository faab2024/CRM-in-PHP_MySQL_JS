<?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = implode(",",$_POST['email']);
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = $_POST['sender'];
mail($to_email, $subject, $message, $headers);

?>