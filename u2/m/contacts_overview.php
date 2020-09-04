<?PHP

include($dbc);
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  contacts WHERE client=".$_SESSION['id']." ORDER BY name ASC LIMIT 5");

?>
    <div class="lable">Recent Contacts</div>
    <table class="table-home">
         
        <thead>
           
             <tr>
                <th>Name</th>
                
                <th>Location</th>
                
          </tr>
    </thead>
<tbody>
<?php
while($res = mysqli_fetch_array($result)) {
echo "<tr>";	
echo "<td>".$res['name']."</td>";

echo "<td>".$res['location']."</td>";

echo "</tr>";	
}
?>
</tbody>
</table>   

		   
 