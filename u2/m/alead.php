
<?php include ("../c/c.php");
require($dbc);

if(isset($_POST['add'])){
    


    $Name = $_POST['name'];
	
	$Phone = $_POST['phone'];
	
	$Email = $_POST['email'];
	
	$Location =$_POST['location'];
	
	$Business_Phone = $_POST['business_phone'];
	
	$website = $_POST['website'];
	
	$business_name = $_POST['business_name'];
	
	$lead_status =$_POST['lead_status'];
	
	$business_industry = $_POST['business_industry'];
	
	$lead_score =$_POST['lead_score'];
	
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
    
  $Name = $_POST['name'];
	
	$Phone = $_POST['phone'];
	
	$Email = $_POST['email'];
	
	$Location =$_POST['location'];
	
	$Business_Phone = $_POST['business_phone'];
	
	$website = $_POST['website'];
	
	$business_name = $_POST['business_name'];
	
	$lead_status =$_POST['lead_status'];
	
	$business_industry = $_POST['business_industry'];
	
	$lead_score =$_POST['lead_score'];
    
    
//insert data to database	
$sql="INSERT INTO leads(name,email,phone,location,client,business_phone,website,business_name,lead_status,business_industry,lead_score) 
VALUES
('$Name','$Email','$Phone','$Location','$client',
'$Business_Phone','$website','$business_name','$lead_status','$business_industry','$lead_score')"; 
if (mysqli_query($conn, $sql)) {
    echo "<center>Lead Is Registered!</center>";
     header('Refresh: 0.1; url=/home/cont.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Lead Is Not Registered, Try Again Later";
}
mysqli_close($conn);

}		
}



?>