<?php
session_start();
//include('header.php');
include('config.php');

if(isset($_COOKIE['rememberme'])){
    //$conn=connectDB();
    // Decrypt cookie variable value
    $userid = decryptCookie($_COOKIE['rememberme']);
    
    //$sql_query = "select count(*) as cntUser,id from login where id='".$userid."'";
        $sql_query = "select * from crm_user where id='".$userid."'";
        $result = mysqli_query($conn,$sql_query);
        $num = mysqli_fetch_array($result);

        //$count = $num['cntUser'];

        if($num > 0){
             $userid = $num['id'];
            if( isset($_POST['rememberme']) ){

                // Set cookie variables
                $days = 30;
                $value = encryptCookie($userid);
                setcookie ("rememberme",$value,time()+ ($days *  24 * 60 * 60 * 1000),"/");
            }
            
            $$userid= $num['id'];
        $_SESSION['id'] = $userid; 
       
        $_SESSION['valid'] = $num['id'];
		
		$_SESSION['email'] = $num['email'];		
        $_SESSION['name'] = $num['name'];
	
		$_SESSION['mobile'] = $num['mobile'];
           
           
            
        //users log
       
        $extra="home.php";
        
       
    
        header("location: /home/$extra");    
             
            
         exit; 
    }else{
        
        echo "Error: " . $sql_query. "<br>" . mysqli_error($mysqli);
        $_SESSION['msg']="Invalid username or password";
        $extra="login.php";
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        $msg="Username or Password Invalid";
        
    }
}

// Encrypt cookie
function encryptCookie( $value ) {

   $key = hex2bin(openssl_random_pseudo_bytes(4));

   $cipher = "aes-256-cbc";
   $ivlen = openssl_cipher_iv_length($cipher);
   $iv = openssl_random_pseudo_bytes($ivlen);

   $ciphertext = openssl_encrypt($value, $cipher, $key, 0, $iv);

   return( base64_encode($ciphertext . '::' . $iv. '::' .$key) );
}

// Decrypt cookie
function decryptCookie( $ciphertext ) {

   $cipher = "aes-256-cbc";

   list($encrypted_data, $iv,$key) = explode('::', base64_decode($ciphertext));
   return openssl_decrypt($encrypted_data, $cipher, $key, 0, $iv);

}


// On submit
if(isset($_POST['login'])){
    
    $uname = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    if ($uname != "" && $password != ""){

        $sql_query = "select * from crm_user where email='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $num = mysqli_fetch_array($result);

        //$count = $num['cntUser'];

        if($num > 0){
             $userid = $num['id'];
            if(isset($_POST['rememberme']) ){

                // Set cookie variables
                $days = 30;
                $value = encryptCookie($userid);
                setcookie ("rememberme",$value,time()+ ($days *  24 * 60 * 60 * 1000),"/");
            }
            
            
        $userid = $_SESSION['id'] ;
        $_SESSION['id'] = $num['id'];
        $_SESSION['valid'] = $num['id'];
		//$_SESSION['company_name'] = $num['company_name'];
	
	//	$_SESSION['image'] = $num['image'];
		$_SESSION['email'] = $num['email'];		
		//$_SESSION['address'] = $num['address'];
		$_SESSION['mobile'] = $num['mobile'];
        $_SESSION['name'] = $num['name'];
           
           
            
        //users log
        $uip=$_SERVER['REMOTE_ADDR']; // get the user ip
        $action="Login";
        mysqli_query($conn,"insert into userlog(userid,email,action,userIP) values('".$_SESSION['id']."','".$_SESSION['valid']."','$action','$uip')");
        
        
        //Redirect to the home page
        $extra="home.php";
        $home="";
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    
        header("location:http://$host/home/$extra");    
            
         exit;    
            
        }else{
        echo "Error: " .$sql_query . "<br>" . mysqli_error($conn);
        $_SESSION['msg']="Invalid username or password";
        $extra="login.php";
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        $msg="Username or Password Invalid";
        }

    }

}

?>
<?php include ("header.php");?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login </title>
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
  width: 30%; /* Could be more or less, depending on screen size */
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
</head>

<body>
    
    <form class="modal-content" action=""  method="POST">
    <div class="container">
      <h3>Sign In</h3>
     
      <input name="email" type="text" value="" placeholder="Email..." required />

      <input type="password" placeholder="Password" name="password" required>
      
      
      <div class="clearfix">
       
        <button type="submit" name="login" class="signupbtn">Sign In</button>
        <button type="" class="cancelbtn"> Cancel</button>
        <input type="checkbox" checked=""> Remember me<br></br>
            
            Forgot <a href="#"> password? </a>
      </div>
    </div>
  </form>
  
</body>

</html>