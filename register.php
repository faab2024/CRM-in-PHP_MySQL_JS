<?php
if(isset($OST['signup'])) {
    
$databaseHost = 'localhost';
$databaseName = 'bnsznyem_rgu';
$databaseUsername = 'bnsznyem_abfa';
$databasePassword = '!@#123qweasdzxc';

        $name = $_POST['name'];
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$pass = $_POST['password'];
	
//Create connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
	

	
          $sql="INSERT INTO crm_user(name,username,phone,password) VALUES('$name','$username','$phone','$pass')";
			
		
		
	if (mysqli_query($conn, $sql)) {
    
                
		$reg="<center>Registration successfully,And Your Account Username and Passord Was Sent To Your Email!</center>";
		echo "<br/>";
		//header('Location:url=/spages/login.php');
		//header("Locaurl=login.php");
		header("Location: url=/login.php");
		function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
   }
   $name = $_POST['name'];
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$pass = $_POST['password'];
	
$to_email = $_POST['username'];
$subject = "RGU AI-CRM System, Member Registeration Details";
$message = "This Is your Username: ".$username." and This Is Your Password: ".$pass;
$headers = "From: system@regrowup.com";
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "";
} else { //send email 
    mail($to_email, $subject, $message, $headers);
    
}



		
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Not Registered, Try Again Now";
    header('Location:url=/spages/signup.php');
}

mysqli_close($conn);
	
}
       
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>





<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action=""  method="POST">
    <div class="container">
      <h3>Sign Up</h3>
     
      
     
      <input type="text" placeholder=" Person Name/Company Name" name="name" required />

     
      <input name="username" type="text" value="" placeholder="Email..." required />

     
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
       <input name="phone" type="text" value="" placeholder="Mobile..." required />
      
        <input type="password" placeholder="Password" name="password" required>
      <div class="clearfix">
       
        <button type="submit" name="signup" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
  
 
  
  
  
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
