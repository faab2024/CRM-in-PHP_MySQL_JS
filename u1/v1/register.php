<?php session_start(); ?>

    
<?php
if(isset($_POST['signup'])) {
    
$databaseHost = 'localhost';
$databaseName = 'bnsznyem_suit514';
$databaseUsername = 'bnsznyem_abfa';
$databasePassword = '!@#123qweasdzxc';

       $fname = $_POST['first_name'];
   $lname = $_POST['last_name'];
	$username = $_POST['user_name'];
	$phone = $_POST['phone_mobile'];
	$pass = $_POST['user_hash'];
	
//Create connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
	

	
          $sql="INSERT INTO users(first_name,last_name,user_name,phone_mobile,user_hash) VALUES('$fname','$lname','$username','$phone','$pass')";
			
		
		
	if (mysqli_query($conn, $sql)) {
    
                
		$reg="<center>Registration successfully,And Your Account Username and Passord Was Sent To Your Email!</center>";
		echo "<br/>";
		//header('Location:url=/spages/login.php');
		header("Refresh:0.1; url=login.php");
		//header("Location: url=/spages/login.php");
		function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
   }
   $name = $_POST['first_name'];
   $lname = $_POST['last_name'];
	$username = $_POST['user_name'];
	$phone = $_POST['phone_mobile'];
	$pass = $_POST['user_hash'];
	
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

<title>RGU AI-CRM</title>

<link rel="stylesheet" href="style.css">
</head>

 <br></br>
<body>    

  <br></br>
    
    <form action=""  name="signup" method="post" >
      <header><h3>Register Your Company or Agency in RGU AI-CRM </h3></header>
       <?PHP echo $reg; ?>
       <center> <a href="/spages/login.php">IF You Are Registered Please Click Here, To Login </a></center>
     <label>First Name</label>
     <input type="text" placeholder="First Name" name="first_name" required />
     <label>Last Name</label>
     <input type="text" placeholder="Last Name" name="last_name" required />
      <label>Username <span>*</span></label>
      <input name="user_name" type="text" value="" placeholder="Email As Username..." required />
      <label>Mobile No:<span>*</span></label>
      <input name="phone_mobile" type="text" value="" placeholder="Mobile..." required />
      <label>Password</label>
      <input type="text" placeholder="Password" name="user_hash" required>
      
    <button type="submit" name="signup">Register As Member</button>
  
   </form>
    
    

  </body>
</html>