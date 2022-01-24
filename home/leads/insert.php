<?php
//$connect = mysqli_connect("localhost", "root", "", "testing");

include '../connection.php';

if(isset($_POST["title"], $_POST["sub_title"],$_POST["content"], $_POST["imgUrl"],$_POST["code"],$_POST["code_result"]))
{

 $title = $_POST["title"];
 $sub_title = $_POST["sub_title"];
 $content = "<pre>".$_POST["content"]."</pre>";
 $imgUrl = $_POST["imgUrl"];
 $code = "<pre>".$_POST["code"]."</pre>";
 $code_result = $_POST["code_result"];
 $query = "INSERT INTO topics(title,sub_title,content,imgUrl,code,code_result) VALUES('$title','$sub_title','$content','$imgUrl','$code','$code_result')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>