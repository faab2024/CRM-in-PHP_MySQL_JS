 <?php include ("../c/c.php");?>
 <?php include ("../c/v.php");?>
 <?php include ($nav);?>
 <?php include ($aemail);?>





       <h3>Send Emails To Anyone Easily</h3>
    

  
    
    <form action=""  method="post">
      
      <p><input class="w3-input w3-border" type="text" placeholder="From" required name="sender"></p>
      
      <p><input class="w3-input w3-border" type="text" placeholder="To" required name="email"></p>
      
        
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="CC:" required name="cc"></p>
      <p><textarea id="subject" class="textarea" name="message" placeholder="Write something.." style="height:200px"></textarea></p>
      
     </p>
     
      
      <p>
        <button class="btn" type="submit">
          <i class="fa fa-paper-plane"></i> SEND 
        </button>
        <button class="btn" type="attach">
          Attach To Email 
        </button>
      </p>
    </form>
    
  
 
<?PHP include_once('footer.php'); ?>