<?php session_start(); ?>
<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /index.php');
}
?>
<?php 
include ("../c/api.php");
include ("../c/c.php");
include ($dbc);
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  contact WHERE client=".$_SESSION['id']." ORDER BY name ASC LIMIT 10");

?>
<div class="table-responsive-widgets text-nowrap">
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
		   
 