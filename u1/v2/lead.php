<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
 <?php include ("../c/v.php");?>
 <?php include ("../c/c.php");?>
 <?php include ($nav);?>
<?php include ($alead);?>



   



       
         <h3>Create Leads </h3> 
   
            
            <form action="" method="POST">

                
                    
                    
                         
                          
                           <input id="" name="name" placeholder="Name" type="text" required ><br>
                           
                           <input id="" name="phone" placeholder="Phone" type="text"required ><br>
                           
                           <input id="" name="email" placeholder="Email" type="text"required ><br>
                          
                           <input id="" name="location" placeholder="Location" type="text" required /><br>

                          
                        

                         

                       
              
                  <button type="submit"  class="btn btn-default" name='add' >Add</button>
                         
                         <button type="reset" class="btn btn-default">Clear Form </button>
                        
                       
                      
                
 
            </form>
            
        
        
        

            
    <?php include ($ft);?>
