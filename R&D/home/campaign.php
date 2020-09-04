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
$period = $_POST['period'];
$stime= $_POST['stime'];
$message = $_POST['message'];
$headers = 'From:'.$sender;
$client=$_SESSION['id'];

$send ='0';    
//mail($to_email, $subject, $message, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO camps(sender,recp,subject,message,stime,period,send,client) VALUES ('$sender','$to_email','$subject','$message','$stime','$period','$send','$client')";
if(mysqli_query($link, $sql)){
    echo "Email Sent Successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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
       <select name="period">
           <option>Hourly</option>
           <option>Daily</option>
           <option>Weekly</option>
           <option>Mothly</option>
       </select>
       
       <p><input class="w3-input w3-border" type="text" placeholder="Set timing h:min" name="stime"></p>
        <p><textarea id="subject" class="textarea" name="message" placeholder="Write something.." style="height:200px"></textarea></p>
      
        <button class="btn" type="submit" name="send" >
          <i class="fa fa-paper-plane"></i> Send Now
        </button>
        <button class="btn" type="submit" name="send_later" >
          Schedule Email
        </button>
       
        
        
        
        
        
      </p>
    </form>
    
  
    
    
    




 <?php include 'footer.php';?>