<?PHP
require 'connect_to_mysql.php';


if(mysqli_error()){

 echo "<h2>Failed</h2><em>".mysqli_error()."</em>";
}else if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
    
}


else{
    
   echo "<h1>Sucess in Database, happy Coding!</h1>"; 
}

?>