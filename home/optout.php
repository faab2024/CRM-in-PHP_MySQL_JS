<?php session_start(); 
$client = $_GET['k'];
if($client==null){
     header('Refresh: 0.1; url=/index.html');
}else{

 include_once 'connection.php';
		    
		    $email = $_GET['e'];
		    $client=$_GET['k'];
	      
		  $sql_delete=mysqli_query("Delete FROM camps WHERE email='$email' AND client='$client'");
		 
		 if(!$sql_delete){
		 
		    echo "Not Removed, Try Again";
		 
		 
		 }else{
		   
		     echo "Done";
		     
		 }
		  


}
?>
	
	
	
		
		
	