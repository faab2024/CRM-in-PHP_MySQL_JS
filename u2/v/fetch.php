<?php
	include ("../c/c.php");
  
    include ($dbc);
	
	$brand = $_GET['brand'];
	
	$sql = "select item from products where brand='$brand'";
	
	$res = mysqli_query($con,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($res)){
		array_push($result, 
				array('item'=>$row[0]));
	}
	
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>