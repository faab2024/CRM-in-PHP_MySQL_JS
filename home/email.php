<?php session_start(); ?>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
		
<?PHP
if(isset($_POST['send'])) {
    
$to_email = $_POST['recp'];
$sender= $_POST['sender'];
$subject = $_POST['subject'];
$stime= $_POST['stime'];
$_SESSION['lead']=$_POST['recp'];
$headers = "From:".$sender;
$headers="Content-type:text/html\r\n";
$client=$_SESSION['id'];
$message = $_POST['message'];
$head="<html>
		<head>
		<title>Email</title>
		</head>
		<body>
		<h1>Hello</h1>";
$body=$message;		
$footer=$footer1.$optout.$footer2;
$optout=$to_email;
$lpo="https://crm.regrowup.com/automation/optout.php?e=";
$footer2="'>Unsubcribe</a>
        </body>
		</html>";
$footer1="<P>RGU Inc</P>
		<hr>
		If dont want recieving this message again<a href=".$lpo.$optout.$footer2;
		
$mail_body=$head.$body.$footer1;

 $mail_b='
         <html>
		<head>
		<title>Email</title>
		</head>
		<body>'
	    .$body.'<br>If you do not want recieving this email again, click <a href="https://crm.regrowup.com/R&D/automation/optin.php?e='.$to_email.'">Unsubcribe</a>'.
		'<P>RGU Inc</P>
		<hr>
		If you do not want recieving this email again, click <a href="https://crm.regrowup.com/R&D/automation/optout.php?e='.$to_email.'">Unsubcribe</a>
		
		</body>
		</html>
         ';
        
if($stime==null){
    
//send now////////////////////////////////////////////////////////////////////////////// 
$send ='1';    
mail($to_email, $subject, $mail_b, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO setEmail(sender,recp,subject,message,stime,send,client) VALUES ('$sender','$to_email','$subject','$message','$stime','$send','$client')";
if(mysqli_query($link, $sql)){
    echo "Email Sent Successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}    
//end//////////////////////////////////////////////////////////////////////////////     
    
}else if($stime !=null){
//send now////////////////////////////////////////////////////////////////////////////// 
$send ='0';    
mail($to_email, $subject, $message, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO setEmail(sender,recp,subject,message,stime,send,client) VALUES ('$sender','$to_email','$subject','$message','$stime','$send','$client')";
if(mysqli_query($link, $sql)){
    echo "<center>Records inserted successfully.</center>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}    
//end//////////////////////////////////////////////////////////////////////////////    
}

// Close connection
mysqli_close($link);
}

if(isset($_POST['send_later'])) {
    
$to_email = $_POST['recp'];
$sender= $_POST['sender'];
$subject = $_POST['subject'];
$stime= $_POST['stime'];
$message = $_POST['message'];
$headers = 'From:'.$sender;
$client=$_SESSION['id'];

if($stime !=null){
//send now////////////////////////////////////////////////////////////////////////////// 
$send ='0';    
mail($to_email, $subject, $message, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO setEmail(sender,recp,subject,message,stime,send,client) VALUES ('$sender','$to_email','$subject','$message','$stime','$send','$client')";
if(mysqli_query($link, $sql)){
    echo "<center>Email  Scheduled Successfully.</center>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}    
//end//////////////////////////////////////////////////////////////////////////////    
}

// Close connection
mysqli_close($link);
}
?>
<?PHP include("nav.php");?>
            <div class="title">
         <center>Send Unlimited Emails To Unlimited People Automatically</center>
           </div>
    
    <form action=""  method="post">
      
      <p><input class="w3-input w3-border" type="text" placeholder="From" required name="sender"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="To" required name="recp"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
       <p><input class="w3-input w3-border" type="text" placeholder="Schedule For YYY-mm-dd h:min" name="stime"></p>

        <p><textarea id="subject" class="textarea" name="message" placeholder="Write something.." style="height:200px">
            
            
        </textarea></p>
         	<hr>
	
        <button class="btn" type="submit" name="send" >
          <i class="fa fa-paper-plane"></i> Send Now
        </button>
        <button class="btn" type="submit" name="send_later" >
          Schedule Email
        </button>
       
        
        
        
        
        
      </p>
    </form>
    
  
    
    
    




 <?php include 'footer.php';?>