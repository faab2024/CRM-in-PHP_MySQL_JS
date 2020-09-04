

    
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

<title>RGU AI-CRM</title>

<style>
    html, body {
  border: 0;
  padding: 0;
  margin: 0;
  height: 100%;
}
body {
  background: white;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 16px;
}
form {
  background: white;
  width: 80%;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 10px;
}
form header {
  background: #FF3838;
  padding: 5px 5px;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  border-radius: 10px 10px 0 0;
}
form label {
  margin-left: 20px;
  display: inline-block;
  margin-top: 30px;
  margin-bottom: 5px;
  position: relative;
}
form label span {
  color: #FF3838;
  font-size: 2em;
  position: absolute;
  left: 2.3em;
  top: 10px;
}
form input {
  display: block;
  width: 78%;
  margin-left: 20px;
  padding: 5px 20px;
  font-size: 1em;
  border-radius: 3px;
  outline: none;
  border: 1px solid #ccc;
}
form .help {
  margin-left: 20px;
  font-size: 0.8em;
  color: #777;
}
form button {
  position: relative;
  margin-top: 30px;
  margin-bottom: 30px;
  left: 50%;
  transform: translate(-50%, 0);
  font-family: inherit;
  color: white;
  background: #FF3838;
  outline: none;
  border: none;
  padding: 5px 15px;
  font-size: 1.3em;
  font-weight: 400;
  border-radius: 3px;
  box-shadow: 0px 0px 10px rgba(51, 51, 51, 0.4);
  cursor: pointer;
  transition: all 0.15s ease-in-out;
}
form button:hover {
  background: #ff5252;
}
    
</style>
</head>

 
<body>    

  
    
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