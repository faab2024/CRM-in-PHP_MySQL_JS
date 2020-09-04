<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>


<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update'])){	
	$id = $_SESSION['id'];
	
	$name = $_POST['name'];
	
	$username = $_POST['username'];
	
	$password = $_POST['password'];
	
	
	
	// checking empty fields
	if(empty($name) || empty($username) || empty($password)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($username)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE crm_user SET name='$name', username='$username', 
		password='$password' WHERE id='$id'");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: /mpages/profile.php");
	}
}

?>


<?php

//getting id from url
$id = $_SESSION['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM crm_user WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	
	$username = $res['username'];
	
	$password = $res['pasword'];
	
	
}
?>

     
       
    
<body>
    
    
     
 <!--Navbar(sit on top)-->
<div class="menu">
            
    <?php include 'nav.php';?>
         
</div>
	
	
	<!-- Main Content -->
    <center><h1>Edit Profile</h1>
   
    
  
     <br>
     
         <form action=""  id="form1" name="form1" method="POST">
            
           
             
    
             <div class="row">
    

                <div class="col-25">
                    
                          <label for="state">Profile Name:</label> 
                           <input type="text" name="name" value="<?php echo $name;?>">
                           <label for="zip"> Username:</label> 
                           <input type="text" name="username" value="<?php echo $username;?>">
                           <label for="zip">New Password:</label> 
                           <input type="text" name="password" value="<?php echo $password;?>">
                           
                          
           
               </div>

             </div>
            
    
             <div class="row">
               <div class="col-50">
                 <button type="submit" form="form1" name="update" class="btn btn-default" value="update">Update Profile</button>
                 <br>
               <lable>Changes Will Be Displayed In Your Account After You Logout and Login Back </lable> 
               
              </div>
              <br>
             
            </div>


         </form>
    
<div class="menu">
            
    <?php include 'footer.php';?>
         
</div>
	