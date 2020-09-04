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