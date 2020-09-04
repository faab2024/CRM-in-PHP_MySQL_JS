 <?php 
  include ("../c/c.php");
  include ($nav);
  include ($ailead);
  ?>



      

   <h4 align="center">Automatically Import All Contacts in 1 Second</h4><br/>
   <p>Contact Us to Provide you the template of Excel File, info@regrowup.com </p>
   <form  action=""  method="post" enctype="multipart/form-data">
    <label>Select Data Sheet</label>
    <input type="file" name="excel" required/>
    
 
    <input type="submit" name="import" class="btn btn-info" value="Register" required />
   </form>
 
   <?php
   echo $output;
   ?>
 

 <?PHP include ($ft); ?>

