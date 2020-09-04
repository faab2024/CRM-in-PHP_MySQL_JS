<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$data = array(
 ':first_name'  => $_POST["first_name"],
 ':last_name'  => $_POST["last_name"]
); 

$query = "
 INSERT INTO tbl_sample 
(first_name, last_name) 
VALUES (:first_name, :last_name)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 $output = array(
  'first_name' => $_POST['first_name'],
  'last_name'  => $_POST['last_name']
 );

 echo json_encode($output);
}

?