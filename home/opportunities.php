<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  opportunity WHERE client=".$_SESSION['id']." ORDER BY name ASC ");
if(isset($_POST['filter'])){


  $Filt =$_POST['num'];
  $Date_reg =$_POST['date_reg'];

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  opportunity  WHERE client=".$_SESSION['id']." AND date_reg LIKE '%".$Date_reg."%' ORDER BY name ASC LIMIT $Filt");


}

?>
<?php
if(isset($_POST['submit'])){

//including the database connection file
include_once("connection.php");

$Key=$_POST['search_key'];
//fetching data in descending order (lastest entry first)
$resul = mysqli_query($mysqli, "SELECT * FROM opportunity WHERE client=".$_SESSION['id']." AND name LIKE '%".$Key."%' ORDER BY name ASC");
}
?>
   
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
        
</div>
<body>
       

<center>
     
        
         <form action="" method="post" id="searchform">
     
       <h1> Opportunities Management </h1>
         <h3> <a href="/home/create_oppt.php">Create Opportunity</a> |<a href="/home/import_oppt.php">Import Opportunity</a></h3>
          <input  type="text"  name="search_key"  placeholder="Search By /Name..." />
      <input type="submit" name="submit"  class="btn btn-default" value="Search"/>
       
      
     <div class="table-responsive text-nowrap">
               
          <table class="table table-striped">
			
                           <thead>
                                <tr>
                                    
                                   <th>Opportunity</th>
                                   <th>Sales Stage</th>
                                    <th>Probability</th>
                                   <th>Campaigns</th>
                                  <th>Expected Close Date</th>
                                 
                                 
                                 </tr>
                            </thead>
							  
                               <tr>
                               <?php
		                       while($re = mysqli_fetch_array($resul)) {

                                            echo "<td>".$re['name']."</td>";
                                            echo "<td>".$re['sale_stage']."</td>";
                                            echo "<td>".$re['probability']."</td>";
                                             echo "<td>".$re['campaign']."</td>";
                                            echo "<td>".$re['exp_closeDate']."</td>";
                                           
                                            
		                          
		                            echo "</tr>";	
	                            	}
	                            	?> 
                           </tr>
             
	
            </table>   
      </div>
	 
    </form>
</div>

        
        
        
        
           <center> <h3>Available Opportunities</h3></center>
           <center>
          
           
           
           
         
           
           
           
           
            <form action="" method="POST">
            
           
        
            <input  type="text"  name="num"  placeholder="Enter Number of Record" required/> <br>
             <input  type="text"  name="date_reg"  placeholder="Enter Saved Date"  required/>
             
             <input type="submit" name="filter"  class="btn btn-default" value="Filter"/>
            
           </form>
           <div class="table-responsive text-nowrap">
            <form action="/action.php" method="POST">
                        <center>     
               
                        <table class="table table-striped">
                                

                                   <thead>
                            
                                    <tr>
                                    
                                    <th>Opportunity</th>
                                   <th>Sales Stage</th>
                                    <th>Probability</th>
                                   <th>Campaigns</th>
                                  <th>Expected Close Date</th>
                                 
                                 </tr>
                            
                              </thead>
                        
                        <tbody>
                            
                           <?php
		                  while($res = mysqli_fetch_array($result)) {
		                                    echo "<tr>";	
		                                      echo "<td>".$res['name']."</td>";
                                            echo "<td>".$res['sale_stage']."</td>";
                                            echo "<td>".$res['probability']."</td>";
                                             echo "<td>".$res['campaign']."</td>";
                                            echo "<td>".$res['exp_closeDate']."</td>";
                                            echo "</tr>";	
		                 
		                 
		                  }
                          ?>
                        </tbody>
                       
                    </table>   
                   
                    
                 </center>
                
                
               
 
            </form>
            </center>
		   </div>
		   </center>
   <div class="menu">
            
    <?php include 'footer.php';?>
         
</div>