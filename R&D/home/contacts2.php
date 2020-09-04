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
  
$date = date('m/d/Y h:i:s a', time());
$SDate='11/03/2019 03:30:41 pm'; 
if($date==$SDate) {
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  led WHERE client=".$_SESSION['id']." AND display='$date' ORDER BY name ASC ");
}

if(isset($_POST['filter'])){


  $Filt =$_POST['num'];
  $Date_reg =$_POST['date_reg'];

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  led  WHERE client=".$_SESSION['id']." AND date_reg LIKE '%".$Date_reg."%' ORDER BY name ASC LIMIT $Filt");


}

?>
<?php
if(isset($_POST['submit'])){

//including the database connection file
include_once("connection.php");

$Key=$_POST['search_key'];
//fetching data in descending order (lastest entry first)
$resul = mysqli_query($mysqli, "SELECT * FROM led WHERE client=".$_SESSION['id']." AND name LIKE '%".$Key."%' ORDER BY name ASC");
}
?>
   
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
        
</div>
<body>
       

<center>
     
        
         <form action="" method="post" id="searchform">
     
       <h3> Search and Meet Your Contacts and Clients </h3>
       
          <input  type="text"  name="search_key"  placeholder="Search By /Name..." />
      <input type="submit" name="submit"  class="btn btn-default" value="Search"/>
       
      
     <div class="table-responsive text-nowrap">
               
          <table class="table table-striped">
			
                           <thead>
                                <tr>
                                    
                                   <th>Name</th>
                                   <th>Phone</th>
                                   <th>Email</th>
                                   <th>Location</th>
                                  <th>Date Saved</th>
                                 
                                 </tr>
                            </thead>
							  
                               <tr>
                               <?php
		                       while($re = mysqli_fetch_array($resul)) {
		                            
		                           //To Fix bill name for all
		                           $Name =$re['name'];
		                           $No = $re['phone'];
		                           $Email= $re['email'];
		                           
		                           $location= $re['location'];
		                           $reg = $re['date_reg'];
		                      
                                            echo "<td>".$re['name']."</td>";
                                            echo "<td>".$re['phone']."</td>";
                                            echo "<td>".$re['email']."</td>";
                                            echo "<td>".$re['location']."</td>";
                                            echo "<td>".$re['date_reg']."</td>";
                                            
		                          
		                            echo "</tr>";	
	                            	}
	                            	?> 
                           </tr>
             
	
            </table>   
      </div>
	 
    </form>
</div>

        
        
        
        
           <center> <h3>Your Clients & Customers</h3></center>
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

                                  <th>Name</th>
                                   <th>Phone</th>
                                   <th>Email</th>
                                   <th>Location</th>
                                  <th>Date Saved</th>
                                   
                                  
                                 
                                 </tr>
                            
                              </thead>
                        
                        <tbody>
                            
                           <?php
		                  while($res = mysqli_fetch_array($result)) {
		                                    echo "<tr>";	
		                                    echo "<td>".$res['name']."</td>";
                                            echo "<td>".$res['phone']."</td>";
                                            echo "<td>".$res['email']."</td>";
                                            echo "<td>".$res['location']."</td>";
                                            echo "<td>".$res['date_reg']."</td>";
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