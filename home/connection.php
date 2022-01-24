<?php
$databaseHost = 'localhost';
$databaseName = 'crm_steve';
$databaseUsername = 'root';
$databasePassword = 'root';


$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
if(!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>