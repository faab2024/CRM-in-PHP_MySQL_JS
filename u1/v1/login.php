<?php
session_start();
error_reporting(0);
include 'config.php';
if(isset($_POST['login']))
{
$username=$_POST['user_name']; // Get username
$password=$_POST['user_hash']; // get password
//query for match  the user inputs
$ret=mysqli_query($con,"SELECT * FROM crm_user WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
// if user inputs match if condition will runn
if($num>0){

            $validuser = $num['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $num['name'];
			$_SESSION['email'] = $num['email'];
		//	$_SESSION['package']= $num['package'];
			
                      
                        $_SESSION['id']=$num['id']; // hold the user id in session
           
 	             
			header('URL=/v2/home.php'); 


$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
$action="Login";
// query for inser user log in to data base
//mysqli_query($con,"insert into crmlog(userId,username,action,userIp) values('".$_SESSION['id']."','".$_SESSION['valid']."','$action','$uip')");
// code redirect the page after login
$extra="home.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host/u1/v2/$extra");
exit();
}
// If the userinput no matched with database else condition will run
else
{
$_SESSION['msg']="Invalid username or password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
 }
}
?>
<?PHP

include_once('header.php');

?>
<!DOCTYPE html>
<html>
       <link rel="shortcut icon" href="/images/slogo.png" type="image/png"/>
       <link rel="apple-touch-icon" href="/images/slogo.png" type="image/png"/>
    
<title>RGU CRM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>    

<form name="login" method="post" >
  <header><h3>Login To RGU CRM</h3></header>
  <p style="color:red;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
  <label>Username <span>*</span></label>
  <input name="user_name" type="text" value="" placeholder="Email..." required />
  <label>Password <span>*</span></label>
  <input name="user_hash" type="text" value="" placeholder="Password..." required />
  <button type="submit" name="login">Login</button>
</form>
    
    
    
    
    
  </body>
</html>