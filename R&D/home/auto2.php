<?php
$to_email = implode(",",$_POST['email']);
$subject = $_POST['subject'];
$stime= $_POST['stime'];
$etime= $_POST['etime'];
$period= $_POST['period'];
$message = $_POST['message'];
$headers = $_POST['sender'];
$sender=$header;
$client=$_SESSION['id'];

$zone=$_POST['zone'];
date_default_timezone_set($zone);
$timestamp = date("Y-m-d H:i:s");

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO camp (sender,recp,subject,message,tzone,stime,etime,period,client) VALUES ('$sender','$to_email','$subject','$message','$zone','$stime','$etime','$period','$client')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>