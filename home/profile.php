<?php 
session_start(); 
if(!isset($_SESSION['id'])) {
	header('Location: login.php');
}
?>


<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update'])){	
	$id = $_SESSION['id'];
	
	$name = $_POST['name'];
	
	$username = $_POST['username'];
	
	$password = $_POST['password'];
	
	$email = $_POST['email'];
	
	$location = $_POST['location'];
	
	
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
		$result = mysqli_query($conn, "UPDATE crm_user SET name='$name', username='$username', 
		password='$password', email='$email', location='$location'    WHERE id='$id'");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: /mpages/profile.php");
	}
}

?>


<?php

//getting id from url
$id = $_SESSION['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM crm_user WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	
	$username = $res['username'];
	
	$password = $res['pasword'];
	
	$email = $res['email'];
	
	$location = $res['location'];
	
}
?>

     
       
    
<body>
    
    
     
 <!--Navbar(sit on top)-->
<div class="menu">
            
    <?php include 'nav.php';?>
         
</div>
	
	
	<!-- Main Content -->
    <center><h3>Edit Profile</h3>
   
    
  
   
     
         <form action=""  id="form1" name="form1" method="POST">
            
           
             
    
            
                    
                          <label for="state">Profile Name:</label> 
                           <input type="text" name="name" value="<?php echo $name;?>"><br>
                            <label for="state">Email:</label> 
                           <input type="text" name="email" value="<?php echo $email;?>"><br>
                           <label for="zip"> Username:</label> 
                           <input type="text" name="username" value="<?php echo $username;?>"><br>
                            <label for="zip"> Address:</label> 
                           <input type="text" name="location" value="<?php echo $address;?>"><br>
                           <label for="zip">New Password:</label> 
                           <input type="text" name="password" value="<?php echo $password;?>"><br>
                           
                          
           
               
    
             
                 <button type="submit" form="form1" name="update" class="btn btn-default" value="update">Update Profile</button>
                 <br>
               <lable>Changes Will Be Displayed In Your Account After You Logout and Login Back </lable> 
               
              


         </form>
    </center>
<div class="menu">
            
    <?php include 'footer.php';?>
         
</div>
	