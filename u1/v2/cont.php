<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>

<?PHP
if(isset($_POST['add'])){
    

include_once("connection.php");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }		
  
    $Name = $_POST['name'];
	
	$Phone = $_POST['phone'];
	
	$Email = $_POST['email'];
	
	$Location =$_POST['location'];
	
	$client = $_SESSION['id'];
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  led  WHERE client=".$_SESSION['id']."");

 while($res = mysqli_fetch_array($result)) {
  $email=$res['email'];
}
//Create connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
if($email==$Email){
     echo "<center>This Contact Is Already Registered,Register A New One!</center>";
      header('Refresh: 0.1; url=/home/cont.php');
}else{
    
  
    
    
//insert data to database	
$sql="INSERT INTO led(name,email,phone,location,client) VALUES('$Name','$Email','$Phone','$Location','$client')"; 
if (mysqli_query($conn, $sql)) {
    echo "<center>Contact Is Registered!</center>";
     header('Refresh: 0.1; url=/home/cont.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Contact Is Not Registered, Try Again Later";
}
mysqli_close($conn);

}		
}



?>

   

<body>
       
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
         
</div>

       
        <center> <h1>Manual Contacts Entry </h1> 
   
            <div class="container">
            <form action="" method="POST">

                <div class="row">
                    
                    
                          <div class="col-25">
                           <label for="">Name:</label> 
                           <input id="" name="name" placeholder="Name" type="text" required />
                           <label for="">Phone:</label> 
                           <input id="" name="phone" placeholder="Phone" type="text"required />
                           <label for="">Email:</label> 
                           <input id="" name="email" placeholder="Email" type="text"required />
                           <label for="">Location:</label>
                           <input id="" name="location" placeholder="Location" type="text" required  />
                          </div>
                          
                        

                         <button type="submit"  class="btn btn-default" name='add' >Add</button>
                         
                         <button type="reset" class="btn btn-default">Clear Form </button>

                       
                </div>
                <div class="row">
                  
                        
                       
                      
                </div>
 
            </form>
            
        </div>
        </center>
        
<div class="menu">
            
    <?php include 'footer.php';?>
</div>