<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>



<?php
require_once('db.php');

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

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//insert data to database	
$sql="INSERT INTO leads(name,email,phone,location,client,business_phone,website,business_name,lead_status,business_industry,lead_score) 
VALUES
('$Name','$Email','$Phone','$Location','$client',
'$Business_Phone','$website','$business_name','$lead_status','$business_industry','$lead_score')"; 

$conn->exec($sql);










echo "<script>alert('Account successfully added!'); window.location='index.php'</script>";
?>