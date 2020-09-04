<?php session_start(); ?>

    
<?php
if(isset($_POST['signup'])) {
    
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
     <label>Name</label>
     <input type="text" placeholder=" Person Name/Company Name" name="name" required />
      <label>Email <span>*</span></label>
      <input name="username" type="text" value="" placeholder="Email..." required />
      <label>Mobile No:<span>*</span></label>
      <input name="phone" type="text" value="" placeholder="Mobile..." required />
      <label>Password</label>
      <input type="password" placeholder="Password" name="password" required>
      
    <button type="submit" name="signup">Register As Member</button>
  
   </form>
    
    

  </body>
</html>