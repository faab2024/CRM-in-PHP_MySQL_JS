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

 $Name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
 $currency= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
 $exp_closeDate=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
 $opp_amount=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
 $type=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
$sale_stage=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5,$row)->getValue());
$lead_source=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6,$row)->getValue());
$probability=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7,$row)->getValue());
$campaign=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8,$row)->getValue());
$next_step=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9,$row)->getValue());
$description=mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(10,$row)->getValue());
$client = $_SESSION['id'];
    // $query ="INSERT INTO led(name,email,phone,location,client) VALUES('$name','$email','$phone','$location','$user')"; 
    
$query="INSERT INTO `opportunity`(`name`, `currency`, `exp_closeDate`, `opp_amount`, 
`type`, `sale_stage`, `lead_source`, `probability`, `campaign`, `next_step`, `description`, `client`)
VALUES
(
'$Name',
'$currency',
'$exp_closeDate',
'$opp_amount',
'$type',
'$sale_stage',
'$lead_source',
'$probability',
'$campaign',
'$next_step',
'$description',
'$client'
)"; 
    mysqli_query($connect, $query); 
    if($query!=null){
    $output .= '<td>'.$Name.'</td>';
    $output .= '<td>'.$currency.'</td>';
    $output .= '<td>'.$exp_closeDate.'</td>';
    $output .= '<td>'.$opp_amount.'</td>';
     $output .= '<td>'.$type.'</td>';
    $output .= '<td>'.$sale_stage.'</td>';
    $output .= '<td>'.$probability.'</td>';
    $output .= '<td>'.$campaign.'</td>';
     $output .= '<td>'.$next_step.'</td>';
    $output .= '<td>'.$description.'</td>';
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
   <h3 align="center">Import Contacts Leads in 1 Second</h3><br />
   
   <form  action=""  method="post" enctype="multipart/form-data">
    <label>Select Leads Data Sheet</label>
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