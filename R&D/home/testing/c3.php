<?php session_start(); ?>


   
<?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = "joshua@yourdigitalunicorn.com";
$subject = "RGU-CRM Email Automation Demo To Josh";
$message = "Is this Message Recieved";
$headers = 'From: system@regrowup.com';

//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "";
} else { //send email 
    mail($to_email, $subject, $message, $headers);
    $s="Email Sent Successfully";
}
?>


  