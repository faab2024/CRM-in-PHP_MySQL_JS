		<?PHP

		if(isset($_GET['e'])){
		    

		    include_once "connect_to_mysql.php";
		    
		    $email = $_GET['e'];
	
		  $sql_delete=mysqli_connect("DELETE FROM newsletter2 WHERE email='$email' LIMIT 1");
		 
		 if(!$sql_delete){
		 
		    echo "Not Removed, Try Again";
		 
		 
		 }else{
		   
		     echo "Done";
		     
		 }
		  
		}
		?>
		<h1>Welcome</h1>
		
	