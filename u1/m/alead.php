<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
<?php include ("../c/c.php");
require($dbc);
if(isset($_POST['add'])){
    

	
    /*
    $Name = $_POST['name'];
	
	$Phone = $_POST['phone'];
	
	$Email = $_POST['email'];
	
	$Location =$_POST['location'];
	
	$client = $_SESSION['id'];
	*/
	$Name = "Alex";
	
	$Phone = "123456678";
	
	$Email = "asd@gmail.com";
	
	$Location ="New Delhi";
	
	$client = "2";
	
	/*
//fetching data in descending order (lastest entry first)
$result = mysqli_connect($connect,"SELECT * FROM  leads  WHERE user=".$_SESSION['id']."");

 while($res = mysqli_fetch_array($result)) {
  $email=$res['email'];
}
//Create connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
if($email==$Email){
     echo "<center>This Contact Is Already Registered,Register A New One!</center>";
      header('Refresh: 0.1; url=/home/cont.php');
}else{
    */
  
    
    
//insert data to database	
$sql="INSERT INTO leads(first_name,phone_other,phone_mobile,primary_address_country,user) VALUES('$Name','$Email','$Phone','$Location','$client')"; 
if (mysqli_query($connect, $sql)) {
    echo "<center>Contact Is Registered!</center>";
     header('Refresh: 0.1; url=/home/cont.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Contact Is Not Registered, Try Again Later";
}
mysqli_close($conn);

//}		
}



?>
