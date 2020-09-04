<?PHP
if(isset($_POST['add'])){
    

include($dbc);
	
  
    $Name = $_POST['name'];
	
	$Phone = $_POST['phone'];
	
	$Email = $_POST['email'];
	
	$Location =$_POST['location'];
	
	$client = $_SESSION['id'];
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  led  WHERE client=".$_SESSION['id']."");

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
    
  
    
    
//insert data to database	
$sql="INSERT INTO led(name,email,phone,location,client) VALUES('$Name','$Email','$Phone','$Location','$client')"; 
if (mysqli_query($conn, $sql)) {
    echo "<center>Contact Is Registered!</center>";
     header('Refresh: 0.1; url=/home/cont.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Contact Is Not Registered, Try Again Later";
}
mysqli_close($conn);

}		
}



?>