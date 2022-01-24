<?php
//$connect = mysqli_connect("localhost", "root", "", "testing");
include '../connection.php';

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE topics SET ".$_POST["column_name"]."='".$value."',".$_POST["column_name"]."='".$value."',".$_POST["column_name"]."='".$value."',".$_POST["column_name"]."='".$value."',".$_POST["column_name"]."='".$value."',".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>