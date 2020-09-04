
 <?php include ("../c/c.php");?>
  <?php include ("../c/v.php");?>
 <?php include ($nav);?>
 



     
        <h3> Search Leads </h3>
         <form action="" method="post" id="searchform">
    
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


        
        
        
        
            <h3>All Leads</h3>
          
         
            <form action="" method="POST">
            
           
        
            <input  type="text"  name="num"  placeholder="Enter Number of Record" required/> 
             <input  type="text"  name="date_reg"  placeholder="Enter Saved Date"  required/>
             
             <input type="submit" name="filter"  class="btn btn-default" value="Filter"/>
            
           </form>
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
                   
                    
                 
                
                
               
 
            </form>
            
		   </div>
		   

            
 <?php include ($ft);?>
         
