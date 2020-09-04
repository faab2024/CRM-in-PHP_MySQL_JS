<?PHP include_once("../c/c.php");?>
<?php
//including the database connection file
include_once("connection.php");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  camp WHERE client=".$_SESSION['id']." ORDER BY name ASC LIMIT 10");

?>

 
           
           

           <div class="table-responsive text-nowrap">
            
                     <p>Contacts</p>
               
                        <table class="table table-striped">
                                   <thead>
                                    <tr>
                                  <th>Date</th>
                                   <th>Sender</th>
                                   <th>Client</th>
                                   <th>Subject</th>
                                 </tr>
                              </thead>

                        <tbody>
                            
                           <?php
		                  while($res = mysqli_fetch_array($result)) {
		                                    echo "<tr>";	
		                                    echo "<td>".$res['date_reg']."</td>";
		                                    echo "<td>".$res['sender']."</td>";
                                            echo "<td>".$res['recp']."</td>";
                                            echo "<td>".$res['subject']."</td>";
                                           
                                           
                                            echo "</tr>";	
		                 
		                 
		                  }
                          ?>
                        </tbody>
                       
                    </table>   
                   
                    
                 
                
                
               
 
         
            
		   </div>
		   
 