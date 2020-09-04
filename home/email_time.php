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
$message = $_POST['message'];
$headers = 'From:'.$sender;
$client=$_SESSION['id'];

if($stime==null){
    
//send now////////////////////////////////////////////////////////////////////////////// 
$send ='1';    
mail($to_email, $subject, $message, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO setEmail(sender,recp,subject,message,stime,send,client) VALUES ('$sender','$to_email','$subject','$message','$stime','$send','$client')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}    
//end//////////////////////////////////////////////////////////////////////////////     
    
}else if($stime !=null){
//send now////////////////////////////////////////////////////////////////////////////// 
$send ='0';    
//mail($to_email, $subject, $message, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO setEmail(sender,recp,subject,message,stime,send,client) VALUES ('$sender','$to_email','$subject','$message','$stime','$send','$client')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}    
//end//////////////////////////////////////////////////////////////////////////////    
}

// Close connection
mysqli_close($link);
}
?>
<?PHP include("camp_nav.php");?>
            <div class="title">
         <center>Send Unlimited Emails To Unlimited People Automatically</center>
           </div>
 
    <form action=""  method="post">
      
      <p><input class="w3-input w3-border" type="text" placeholder="From" required name="sender"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="To" required name="recp"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
       <p><input class="w3-input w3-border" type="text" placeholder="Send at YYY-mm-dd h:min" name="stime"></p>

        <p><textarea id="subject" class="textarea" name="message" placeholder="Write something.." style="height:200px"></textarea></p>
      
        <button class="btn" type="submit" name="send" >
          <i class="fa fa-paper-plane"></i> SEND 
        </button>
        <button class="btn" type="attach">
          Attach To Email 
        </button>
        
        
        
        
        
      </p>
    </form>
    
  
    
    
    




 <?php include 'footer.php';?>