
<?PHP 
// Written By Abdul Fakhri 
include("sigin.php");
?>
<?PHP include("register.php");?>
<?php
$databaseHost = 'localhost';
$databaseName = 'ironxpxj_crm';
$databaseUsername = 'ironxpxj_admin';
$databasePassword = '!@#123qweasdzxc';



$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(isset($_POST['send'])){
  $name=$_POST['name'];
  $subject=$_POST['subject'];
  $address=$_POST['location'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $to="inc.academy.share@gmail.com";
  $header='From:'.$email;
  mail($to,$subject,$message,$header);
  $sql ="insert into contact_us(sender,sender_name,subject,message,location) values('$email','$name','$subject','$message','$address')";
  mysqli_query($mysqli, $sql);
}else{
    
}
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
 $referrer = $_SERVER['HTTP_REFERER'];
 $datetime = date("F j, Y, g:i a");
 $useragent = $_SERVER['HTTP_USER_AGENT'];

  
//INSERT INTO `contact_us`(`id`, `sender`, `recp`, `subject`, `message`, `date_reg`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

 $sql="insert into site_visitor(ip,current_page,referrer,time,user_agent) values('$ipaddress','$page','$referrer','$datetime','$useragent')";

  mysqli_query($mysqli, $sql);
  
  
 ?>
 

 <?php include ("header.php");?>

<!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h6 class="w3-jumbo">RGU Customer Relationship Manager</h6>
    <h8class="w3-xxxlarge w3-text-red"><b>Robotic CRM and Email Automation Software.</b></h8>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
 

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
  
  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>
        
        <div class="tooltip">Services
       
       </div>
        
        </b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We are business service agency that we focus on; what's best for your business ehancement and what's best for you!</p>
    
  </div>
  

  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action=""  method="POST">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Address</label>
        <input class="w3-input w3-border" type="text" name="location" >
      </div>
      <div class="w3-section">
        <label>Subject</label>
        <input class="w3-input w3-border" type="text" name="subject" >
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
      <button type="submit" name="send" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>
 <?php include ('footer.php');?>