<?php session_start(); ?>


<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
<?php 
include_once("connection.php");
if(isset($_POST['send'])) {

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

   // mail($to_email, $subject, $message, $headers);
    
$con=mysqli_connect("localhost","bnsznyem_abfa","!@#123qweasdzxc","bnsznyem_rgu");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform a query, check for error
if (!mysqli_query($con,"INSERT INTO camp(sender,recp,subject,message,tzone,stime,etime,period,client) VALUES('$sender','$to_email','$subject','$message','$zone','$stime','$etime','$period','$client'"))
  {
  $aler=("Error description: " . mysqli_error($con));
  } else{
      
        $alert="Great";
  }

mysqli_close($con);
}
?> 
