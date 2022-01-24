<?php
//$connect = mysqli_connect("localhost", "root", "", "testing");

include '../connection.php';

if(isset($_POST["id"]))
{
 $query = "DELETE FROM topics WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>