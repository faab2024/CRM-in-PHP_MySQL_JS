<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
<?php
  include ('../c/c.php');
  include ($nav);
  include ($dbc);
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
    $business_phone = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
    $website = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5,$row)->getValue());
    $business_name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6,$row)->getValue());
    $lead_status = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7,$row)->getValue());
    $business_industry = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8,$row)->getValue());
    $lead_score = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9,$row)->getValue());
    $client = $_SESSION['id'];
    
    // $query ="INSERT INTO led(name,email,phone,location,client) VALUES('$name','$email','$phone','$location','$user')"; 
    $query="INSERT INTO contacts(name,email,phone,location,client,business_phone,website,business_name,lead_status,business_industry,lead_score) 
VALUES('$name','$email','$phone','$location','$client',
'$Business_Phone','$website','$business_name','$lead_status','$business_industry','$lead_score')";

    mysqli_query($connect, $query); 
    if($query!=null){
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$email.'</td>';
    $output .= '<td>'.$phone.'</td>';
    $output .= '<td>'.$location.'</td>';
     $output .= '<td>'.$business_phone.'</td>';
    $output .= '<td>'.$website.'</td>';
    $output .= '<td>'.$business_name.'</td>';
    $output .= '<td>'.$lead_status.'</td>';
     $output .= '<td>'.$business_industry.'</td>';
    $output .= '<td>'.$lead_score.'</td>';
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
    <label>Select Contacts Data Sheet</label>
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
 <?php include ($ft);?>