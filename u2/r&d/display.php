<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
 <?php include ("../c/c.php");?>
  
 <?php include ($nav);?>
 
<?php
include($dbc);

$result = mysqli_query($mysqli, "SELECT * FROM  leads WHERE client=".$_SESSION['id']." ORDER BY name ASC ");

echo "<table border='1' >
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Location</th>
<th>Date Saved</th>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
    echo "</tr>";
}
echo "</table>";
?>