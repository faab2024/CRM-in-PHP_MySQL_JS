<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
<?php
include 'db.php';

$get_id=$_REQUEST['id'];
    
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
//	UPDATE `leads` SET `id`=[value-1],name`=[value-2],`phone`=[value-3],
//	`email`=[value-4],`location`=[value-5],`business_phone`=[value-6],
//	`website`=[value-7],`business_name`=[value-8],`lead_status`=[value-9],
//	`business_industry`=[value-10],`lead_score`=[value-11],`date_reg`=[value-12],`client`=[value-13] WHERE 1

$sql = "UPDATE leads SET 
name ='$Name', 
phone ='$Phone', 
email ='$Email',
business_phone ='$Business_Phone', 
website ='$website', 
business_name ='$business_name', 
lead_status ='$lead_status', 
lead_score ='$lead_score' 
WHERE id ='$get_id' AND client='$client'";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='index.php'</script>";


?>

