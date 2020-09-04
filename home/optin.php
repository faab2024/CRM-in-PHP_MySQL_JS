<?php session_start(); 
$client = $_GET['k'];
if($client==null){
     header('Refresh: 0.1; url=/index.html');
}else{

?>
<?php
 include_once("connection.php");
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
 $referrer = $_SERVER['HTTP_REFERER'];
 $datetime = date("F j, Y, g:i a");
 $useragent = $_SERVER['HTTP_USER_AGENT'];

 $sql="insert into visitor_details(ip,current_page,referrer,time,user_agent) values('$ipaddress','$page','$referrer','$datetime','$useragent')";
 
  mysqli_query($mysqli, $sql);
 ?>
<?PHP

$lead_email=$_GET['e'];
$client = $_GET['k'];
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  leads  WHERE email='$lead_email' AND client='$client'");

 while($res = mysqli_fetch_array($result)) {
  $email=$res['email'];
}

?>

<?PHP
if(isset($_POST['add'])){
    
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }		
  
    $Name = $_POST['name'];
	$Phone = $_POST['phone'];
	$Email = $_POST['email'];
	$Location =$_POST['location'];
	$Business_Phone = $_POST['business_phone'];
	$website = $_POST['website'];
	$business_name = $_POST['business_name'];
	$lead_status =$_POST['lead_status'];
	$business_industry = $_POST['business_industry'];
	$lead_score =$_POST['lead_score'];
	


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
$to=$email;
$header="From:system@regrowup.com";
$sub="New Contact";
$mes="Hi, One Lead rected to your email and opt-in";
mail($to,$sub,$mes,$header);
  $Name = $_POST['name'];

   $cid = $_POST['cid'];
	
	$Phone = $_POST['phone'];
	
	$Email = $_POST['email'];
	
	$Location =$_POST['location'];
	
	$Business_Phone = $_POST['business_phone'];
	
	$website = $_POST['website'];
	
	$business_name = $_POST['business_name'];
	
	$lead_status =$_POST['lead_status'];
	
	$business_industry = $_POST['business_industry'];
	
	$lead_score =$_POST['lead_score'];
    
    
//insert data to database	
$sql="INSERT INTO optin(name,email,phone,location,client,business_phone,website,business_name,lead_status,business_industry,lead_score) 
VALUES
('$Name','$Email','$Phone','$Location','$client',
'$Business_Phone','$website','$business_name','$lead_status','$business_industry','$lead_score')"; 
if (mysqli_query($conn, $sql)) {
    echo "<center>Thanks!</center>";
     header('Refresh: 0.1; url=/home/otpin.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Failed, Try Again Now";
}
mysqli_close($conn);

}		
}
}
?>

   

<body>
       
<!--Navbar(sit on top)-->
<?PHP include("navout.php");?>        


       
        <h1>Register </h1> 
  
            
            <form action="" method="POST">

                
                         
                           <input id="" name="name" placeholder="Name" type="text" required /><br>
                           
                           <input id="" name="phone" placeholder="Phone" type="text"required /><br>
                           
                           <input id="" name="email" placeholder="Email" type="text" value="<?PHP echo $email;?>" required /><br>
                          
                           <input id="" name="location" placeholder="Location" type="text" required  /><br>
                           
                           <input id="" name="business_phone" placeholder="Business Phone" type="text" required /><br>
                           
                           <input id="" name="website" placeholder="Website" type="text"required /><br>
                           
                           <input id="" name="business_name" placeholder="Business Name" type="text"required /><br>
                          
                           <input id="" name="lead_status" placeholder="Lead Status" type="text" required  /><br>
                           
                            <input id="" name="business_industry" placeholder="Business Industry" type="text"required /><br>
                          
                           <input id="" name="lead_score" placeholder="Lead Score" type="text" required  /><br>
                          
                        

                         <button type="submit"  class="btn btn-default" name='add' >Add</button><br>
                         
                         <button type="reset" class="btn btn-default">Clear Form </button>

                       
               
                
                  
                        
                       
                      
               
 
            </form>
            
        
    
        
<div class="menu">
            
    <?php include 'footer.php';?>
</div>