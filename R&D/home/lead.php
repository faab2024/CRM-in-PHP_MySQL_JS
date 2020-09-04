<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>


<?php
$databaseHost = 'localhost';

$databaseName = 'bnsznyem_rgu';
$databaseUsername = 'bnsznyem_abfa';
$databasePassword = '!@#123qweasdzxc';

$connect = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


$output = '';
if(isset($_POST["import"])){

 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) {
 //check selected file extension is present in allowed extension array

  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  $file2=  $_FILES["name"];
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'><center><h2>Contacts Are Registered Successfully</h2></center></label><br /><table class='table table-bordered'>";

  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet){
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++){
    $output .= "<tr>";
    
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
    $phone = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
    $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
    
    $location = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
    $user = $_SESSION['id'];

     $query ="INSERT INTO led(name,email,phone,location,client) VALUES('$name','$email','$phone','$location','$user')"; 
    
    mysqli_query($connect, $query); 
    if($query!=null){
   
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$email.'</td>';
    $output .= '<td>'.$phone.'</td>';
    $output .= '<td>'.$location.'</td>';
    }else{
        
        echo "There is a problem,Try Again";
    }
  
    
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Not Registered, Try Again</label>'; //if non excel file then
 }
}
?>
<div>
 <?PHP  include 'nav.php'; ?>
</div>
  <center>
      
  <div class="container">
   <h3 align="center">Import ALL Leads in 1 Second</h3><br />
   <p>Contact Us to Provide you the template of Excel File, info@regrowup.com </p>
   <form  action=""  method="post" enctype="multipart/form-data">
    <label>Select Data Sheet</label>
    <input type="file" name="excel" required/>
    
 
    <input type="submit" name="import" class="btn btn-info" value="Register" required />
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>
  </center>
<div>

 <?PHP include 'footer.php'; ?>

</div>