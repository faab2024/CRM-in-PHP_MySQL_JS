
 <?php include ("../c/c.php");?>
 <?php include ($nav);?>




     
        <h3> Select Leads To List </h3>
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


        
        
        
        
          
 <?php include ($ft);?>
         
