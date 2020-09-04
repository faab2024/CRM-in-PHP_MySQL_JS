


<?php
session_start();
error_reporting(0);
include 'c.php';
include ($dbc);
if(isset($_POST['login']))
{
$username=$_POST['username']; // Get username
$password=$_POST['password']; // get password
//query for match  the user inputs
$ret=mysqli_query($connect,"SELECT * FROM crm_user WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
// if user inputs match if condition will runn
if($num>0){

                        $validuser = $num['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $num['name'];
			$_SESSION['email'] = $num['email'];
			$_SESSION['package']= $num['package'];
			
                      
                        $_SESSION['id']=$num['id']; // hold the user id in session
           
 	             
			header('URL=/home/home.php'); 


$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
$action="Login";
// query for inser user log in to data base
mysqli_query($connect,"insert into crmlog(userId,username,action,userIp) values('".$_SESSION['id']."','".$_SESSION['valid']."','$action','$uip')");
// code redirect the page after login
$extra="home.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host/home/$extra");
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
