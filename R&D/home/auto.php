<?PHP include("auto2.php");?>
<?PHP include("camp_nav.php");?>
            <div class="title">
         <center>Send Unlimited Emails To Unlimited People Automatically</center>
           </div>
 
    <form action=""  method="post" target="_blank">
      
      <p><input class="w3-input w3-border" type="text" placeholder="From" required name="sender"></p>
      
      
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
       

      
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
       <p><input class="w3-input w3-border" type="text" placeholder="Start Time  Like YYY-mm-dd h:min:sec" required name="stime"></p>
         <p><input class="w3-input w3-border" type="text" placeholder="Set End TimeLike YYY-mm-dd h:min:sec" required name="etime"></p>
         
       <p><input class="w3-input w3-border" type="text" placeholder="Setup Period like 3,4,5" required name="period"></p>
       
        <p><input class="w3-input w3-border" type="text" placeholder="Set Time Zone like Asia/Kolkata etc.." required name="zone"></p>
      
        <p><textarea id="subject" class="textarea" name="message" placeholder="Write something.." style="height:200px"></textarea></p>
      
     </p>
     
      
      <p>
        <button class="btn" type="submit" name="send">
          <i class="fa fa-paper-plane"></i> SEND 
        </button>
        <button class="btn" type="attach">
          Attach To Email 
        </button>
        
        
       
        
        
      </p>
    </form>
    
  
    
    
    



<script>
	document.multiselect('#testSelect1');
</script>
 <?php include 'footer.php';?>