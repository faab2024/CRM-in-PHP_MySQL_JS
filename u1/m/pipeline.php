<?php 
include ("../c/c.php");
include ($dbc);
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  led WHERE client=".$_SESSION['id']." ORDER BY name ASC LIMIT 10");

?>
<div class="table-responsive-widgets text-nowrap">
    <table class="table table-striped">
        <thead>
            <div class="title font-weight-bold">Pipelines</div>
             <tr>
                <th>Name</th>
                
                <th>Stage</th>
                
          </tr>
    </thead>
<tbody>
<?php
while($res = mysqli_fetch_array($result)) {
echo "<tr>";	
echo "<td>".$res['name']."</td>";


echo "<td>".$res['date_reg']."</td>";
echo "</tr>";	
}
?>
</tbody>
</table>   
</div>