<?php
session_start();

include ('../c/connection.php');
if(isset($_POST['login'])){
$username=$_POST['username']; // Get username
$password=$_POST['password']; // get password
//query for match  the user inputs
$sql="SELECT * FROM crm_user WHERE username='$username' and password='$password'";

// $ret=mysqli_query($mysqli,$sql);
// if user inputs match if condition will runn

if ($num = mysqli_query($mysqli,$sql)) { 

	
		     $validuser = $num['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $num['name'];
			$_SESSION['email'] = $num['email'];
			$_SESSION['package']= $num['package'];
			$_SESSION['id']=$num['id']; // hold the user id in session
			header('Location: URL=/u1/v2/home.php'); 
         
        
         
		
	}else { 
		echo "Username or Password Invalid."; 
	} 
	
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


</style>
</head>
<body>



<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="login" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
     
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
