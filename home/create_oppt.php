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
  
  
  
    
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  opportunity WHERE client=".$_SESSION['id']."");

 while($res = mysqli_fetch_array($result)) {
  $name=$res['name'];
}
//Create connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
if($name==$Name){
     echo "<center>This Contact Is Already Registered,Register A New One!</center>";
      header('Refresh: 0.1; url=/home/cont.php');
}else{
    
 $Name = $_POST['name'];
	
	$currency = $_POST['currency'];
	
	$exp_closeDate = $_POST['exp_closeDate'];
	
	$opp_amount =$_POST['opp_amount'];
	
	$type = $_POST['type'];
	
	$sale_stage = $_POST['sale_stage'];
	
	$business_name = $_POST['business_name'];
	
	$lead_source =$_POST['lead_source'];
	
	$probability = $_POST['probability'];
	
	$campaign=$_POST['campaign'];
	
	$next_step=$_POST['next_step'];
	
	$description=$_POST['description'];
	
	$client = $_SESSION['id'];$Name = $_POST['name'];
	
	$currency = $_POST['currency'];
	
	$exp_closeDate = $_POST['exp_closeDate'];
	
	$opp_amount =$_POST['opp_amount'];
	
	$type = $_POST['type'];
	
	$sale_stage = $_POST['sale_stage'];
	
	$business_name = $_POST['business_name'];
	
	$lead_source =$_POST['lead_source'];
	
	$probability = $_POST['probability'];
	
	$campaign=$_POST['campaign'];
	
	$next_step=$_POST['next_step'];
	
	$description=$_POST['description'];
	
	$client = $_SESSION['id'];
    
    
//insert data to database	

$sql="INSERT INTO `opportunity`(`name`, `currency`, `exp_closeDate`, `opp_amount`, 
`type`, `sale_stage`, `lead_source`, `probability`, `campaign`, `next_step`, `description`, `client`)
VALUES
(
'$Name',
'$currency',
'$exp_closeDate',
'$opp_amount',
'$type',
'$sale_stage',
'$lead_source',
'$probability',
'$campaign',
'$next_step',
'$description',
'$client')"; 
if (mysqli_query($conn, $sql)) {
    echo "<center>Opportunity Is Registered!</center>";
     header('Refresh: 0.1; url=/home/contact.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "Opportunity  Is Not Registered, Try Again Later";
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

       
     
        <center>
        
        <h1>Manual Opportunity Entry </h1> 
  
            
            <form action="" method="POST">

                
                         
                           <input id="" name="name" placeholder="Name" type="text" required /><br>
                           
                           <select name="currency">
                               <option>USD</option>
                               <option>CAD</option>
                           </select><br>
                           
                           <input id="" name="exp_closeDate" placeholder="Expect Close Date" type="text"required /><br>
                          
                           <input id="" name="opp_amount" placeholder="Opportunity Amount" type="text" required  /><br>
                           <p>Type</p>
                           <select name="type">
                               <option>Existing Business</option>
                               <option>New Business</option>
                           </select><br>
                           
                           <p>Sales Stage</p>
                          <select name="type">
                               <option>Prospecting</option>
                               <option>Qualification</option>
                               <option>Needs Analysis</option>
                               <option>Value Proposition</option>
                               <option>Identifiying Decision Makers</option>
                               <option>Preception Analysis</option>
                               <option>Proposal Price/Quote</option>
                               <option>Negotiation/Review</option>
                               <option>Closed Won</option>
                               <option>Closed Lost</option>
                           </select><br>
                           <input id="" name="lead_source" placeholder="Lead Source" type="text" required  /><br>
                           <input id="" name="campaign" placeholder="Campaign" type="text" required  /><br>
                           <input id="" name="next_step" placeholder="Next Step" type="text" required  /><br>
                            <p><textarea id="description" class="textarea" name="message" placeholder="Description..." style="height:200px"></textarea></p> 
                             
                         <button type="submit"  class="btn btn-default" name='add' >Add</button><br>
                         
                         <button type="reset" class="btn btn-default">Clear Form </button>

                       
               
                
                  
                        
                       
                      
               
 
            </form>
            
        
        
<div class="menu">
            
    <?php include 'footer.php';?>
</div>