<?php

$host = "localhost"; /* Host name */
$user = "bnsznyem_abfa"; /* User */
$password = "!@#123qweasdzxc"; /* Password */
$dbname = "bnsznyem_rgu"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}  

////////////////////////////////////////////////////////////////////////
// Indexed Array
/*
$names_arr = array("Yogesh singh","Sonarika Bhadoria","Vijay Maurya");

// Associative Array
$users_arr[] = array("username"=>"yssyogesh","name"=>"Yogesh singh");
$users_arr[] = array("username"=>"bsonarika","name"=>"Sonarika Bhadoria");
$users_arr[] = array("username"=>"vijay","name"=>"Vijay Maurya");

// Serialize the Array
$names_str = serialize($names_arr);
$users_str = serialize($users_arr);

// Insert record
$sql = "INSERT INTO contents_arr(arr_serialize1,arr_serialize2) VALUES('".$names_str."','".$users_str."')";
mysqli_query($con,$sql); 

// Read record
$sql = mysqli_query($con,"SELECT * FROM contents_arr");
while($row = mysqli_fetch_assoc($sql)){
   
   // Unserialize
   $arr_unserialize1 = unserialize($row['arr_serialize1']);
   $arr_unserialize2 = unserialize($row['arr_serialize2']);
   
   // Display
   echo "<pre>";
   print_r($arr_unserialize1);
   print_r($arr_unserialize2);
   echo "</pre>";
}
*/
//////////////////////////////////////////////////////////////////////
// Indexed Array

$names_arr = array("Yogesh singh","Sonarika Bhadoria","Vijay Maurya");

// Separate Array by " , "
$names_str = implode(" , ",$names_arr);

// Insert record
$sql = "INSERT INTO contents_arr(name) VALUES('".$names_str."')";
mysqli_query($con,$sql);

// Read record
$sql = mysqli_query($con,"SELECT * FROM contents_arr");
while($row = mysqli_fetch_assoc($sql)){
 
   $name = $row['name'];
   //$name_explode = explode(" , ",$row['name']);  
   
   echo "name : ".$name."<br>";
  // echo "<pre>";
   //echo $name_explode;
   //echo "</pre>";
}

// Associative Array
/*
$users_arr[] = array("username"=>"yssyogesh","name"=>"Yogesh singh");
$users_arr[] = array("username"=>"bsonarika","name"=>"Sonarika Bhadoria");
$users_arr[] = array("username"=>"vijay","name"=>"Vijay Maurya");
// Insert record
foreach($users_arr as $userid=>$user){
   $username = $user['username'];
   $name = $user['name'];
   $sql = "INSERT INTO contents_arr(username,name) VALUES('".$username."','".$name."')";
   mysqli_query($con,$sql);
}

// Read record
$sql = mysqli_query($con,"SELECT * FROM contents_arr");
while($row = mysqli_fetch_assoc($sql)){
   $username = $row['username'];
   $name = $row['name'];

   echo "username : ".$username.", name : ".$name."<br>";
}
*/

?>