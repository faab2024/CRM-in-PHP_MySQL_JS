<?php
//including the database connection file
include ($dbc);

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  led WHERE client=".$_SESSION['id']." ORDER BY name ASC LIMIT 10");
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
   
 