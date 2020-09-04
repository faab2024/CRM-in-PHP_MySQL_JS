<?php session_start(); ?>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /index.php');
}
?>
<?PHP
if(isset($_POST['start_camp'])) {
    
$to_email = implode(",",$_POST['email']);
$sender= $_POST['sender'];
$subject = $_POST['subject'];
$period = $_POST['period'];
$stime= $_POST['stime'];
$message = $_POST['message'];
$headers = 'From:'.$sender;
$client=$_SESSION['id'];
$send ='0';    
$emails = $_POST['email'];
//mail($to_email, $subject, $message, $headers);
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	for ($i=0; $i<sizeof($emails);$i++) {
	
    $sql = "INSERT INTO camps(sender,recp,subject,message,stime,period,send,client) VALUES ('$sender','".$emails[$i]."','$subject','$message','$stime','$period','$send','$client')";
   $result= mysqli_query($link, $sql);
	}
    if($result){
    echo "<center>Campaign Setup Successfully!</center>";
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
     }
  


// Close connection
mysqli_close($link);
}
?>
<?PHP include("nav.php");?>
            <div class="title">
         <center>Email Campaigns</center>
           </div>
 
    <form action=""  method="post">
      
      <p><input class="w3-input w3-border" type="text" placeholder="From" required name="sender"></p>
       <p>Select Target List</p>
     <p><input class="w3-input w3-border" type="text" placeholder="To" name="email"></p>
     <select name='email[]' id='testSelect1' multiple> 
      <?PHP
      include_once("connection.php");
      $client=$_SESSION['id'];
     $res = mysqli_query($mysqli, "SELECT * FROM leads WHERE client='$client'");
    while($row =mysqli_fetch_array($res)) {
     ?>
     <option value="<?PHP echo $row["email"];?>"><?PHP  echo $row["email"];  ?></option>
     <?PHP
         }
      ?>
     </select>
      </p>
      <p><input class="w3-input w3-border" type="text" placeholder="Campaign Title" required name="subject"></p>
       <p>Select Timing</p><select name="period" id='testSelect1'>
           <option></option>
           <option>Hourly</option>
           <option>Daily</option>
           <option>Weekly</option>
           <option>Mothly</option>
       </select>
       
       <p><input class="w3-input w3-border" type="text" placeholder="Starting YYYY-mm-dd h:min" name="stime"></p>
        <p><textarea id="subject" class="textarea" name="message" placeholder="Write something.." style="height:200px"></textarea></p>
      
        <button class="btn" type="submit" name="start_camp" >
          <i class="fa fa-paper-plane"></i> Start Campaign
        </button>

      </p>
    </form>
  
 <script>
	document.multiselect('#testSelect1');
</script>
<?php include 'footer.php';?>