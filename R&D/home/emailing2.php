<?php session_start(); ?>
<?php
if(!isset($_SESSION['valid'])) {
header('Location: /spages/login.php');
}
?>

<?PHP
if(isset($_POST['send'])) {

$to_email = implode(",",$_POST['email']);
$sender= $_POST['sender'];
$subject = $_POST['subject'];
$stime= $_POST['stime'];
$message = $_POST['message'];
$headers = 'From:'.$sender;
$client=$_SESSION['id'];

if($stime==null){
    
$send ='1';    
mail($to_email, $subject, $message, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO setEmail(sender,recp,subject,message,stime,send,client) VALUES ('$sender','$to_email','$subject','$message','$stime','$send','$client')";
if(mysqli_query($link, $sql)){
    echo "Email Sent Successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}else if($stime!=null){



$send ='0';    
//mail($to_email, $subject, $message, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO setEmail(sender,recp,subject,message,stime,send,client) VALUES ('$sender','$to_email','$subject','$message','$stime','$send','$client')";
if(mysqli_query($link, $sql)){
    echo "Email Saved  Successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}   
  
}
// Close connection
mysqli_close($link);
}
?>





<?PHP include("nav.php");?>
<div class="title">
 <center>Send Unlimited Emails To Unlimited People at Once</center>
 </div>
<form action=""  method="post">
      <p><input class="w3-input w3-border" type="text" placeholder="From" required name="sender"></p>
      <p>
     <select name='email[]' id='testSelect1' multiple> 
      <?PHP
      include_once("connection.php");
      $client=$_SESSION['id'];
     $res = mysqli_query($mysqli, "SELECT * FROM led WHERE client='$client'");
    while($row =mysqli_fetch_array($res)) {
     ?>
     <option value="<?PHP echo $row["email"];?>"><?PHP  echo $row["email"];  ?></option>
     <?PHP
         }
      ?>
     </select>
      </p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Schedule For YYY-mm-dd h:min" name="stime"></p>
      <p><textarea id="subject" class="textarea" name="message" placeholder="Write something.." style="height:200px"></textarea></p>
     </p>
      <p>
       <button class="btn" type="submit" name="send">
          <i class="fa fa-paper-plane"></i> SEND 
        </button>
         <button class="btn" type="submit" name="send_later" >
          Schedule Email
        </button>
      </p>
    </form>
<script>
	document.multiselect('#testSelect1');
</script>
<?php include 'footer.php';?>