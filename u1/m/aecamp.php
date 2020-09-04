 <?php include ("../c/c.php");?>
 
<?php 
include_once($dbc);
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
if($stime==$timestamp){
    mail($to_email, $subject, $message, $headers);
    
    mysqli_query($mysqli,"INSERT INTO camp(sender,recp,subject,message,tzone,stime,etime,period,client) VALUES('$sender','$to_email','$subject','$message','$zone','$stime','$etime','$period','$client'");
}else{
      mysqli_query($mysqli,"INSERT INTO camp(sender,recp,subject,message,tzone,stime,etime,period,client) VALUES('$sender','$to_email','$subject','$message','$zone','$stime','$etime','$period','$client'");
    
}



}
?>