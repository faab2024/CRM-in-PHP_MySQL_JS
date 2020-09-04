
<?php
//including the database connection file
include_once("connection.php");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  led WHERE client=".$_SESSION['id']." ORDER BY name ASC LIMIT 10");

?>

 
           
           

           <div class="table-responsive text-nowrap">
           
                 
               
                        <table class="table table-striped">
                                 

                                   <thead>
                                    <div class="title font-weight-bold">Recent Contacts</div>
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
                   
                    
                
                
                
               
 
         
            
		   </div>
		   
 