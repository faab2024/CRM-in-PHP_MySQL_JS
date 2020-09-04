<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>


<?php

////////////////////////////////////////////////////////////////////////////////////////////
$connect = mysqli_connect("localhost","bnsznyem_abfa","!@#123qweasdzxc","bnsznyem_rgu" );
////////////////////////////////////////////////////////////////////////////////////////////
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
   for($row=1; $row<=$highestRow; $row++){
  $output .= "<tr>";
  $date_entered = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0,$row)->getValue());
  $date_modified = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
  $modified_user_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
  $created_by = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
  $description = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
  $deleted = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5,$row)->getValue());
  $assigned_user_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6,$row)->getValue());
  $salutation = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7,$row)->getValue());
  $first_name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8,$row)->getValue());
  $last_name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9,$row)->getValue());
  $title = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(10,$row)->getValue());
  $photo = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(11,$row)->getValue());
  $department= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(12,$row)->getValue());
  $do_not_call = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(13,$row)->getValue());
  $phone_home = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(14,$row)->getValue());
  $phone_mobile = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(15,$row)->getValue());
  $phone_work = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(16,$row)->getValue());
  $phone_other = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(17,$row)->getValue());
  $phone_fax = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(18,$row)->getValue());
  $lawful_basis = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(19,$row)->getValue());
  $date_reviewed = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(20,$row)->getValue());
  $lawful_basis_source = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(21,$row)->getValue());
  $primary_address_street = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(22,$row)->getValue());
  $primary_address_city = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(23,$row)->getValue());
  $primary_address_state = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(24,$row)->getValue());
  $primary_address_postalcode= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(25,$row)->getValue());
  $primary_address_country = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(26,$row)->getValue());
  $alt_address_street = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(27,$row)->getValue());
  $alt_address_city = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(28,$row)->getValue());
  $alt_address_state = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(29,$row)->getValue());
  $alt_address_postalcode = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(30,$row)->getValue());
  $alt_address_country = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(31,$row)->getValue());
  $assistant = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(32,$row)->getValue());
  $assistant_phone = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(33,$row)->getValue());
  $converted = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(34,$row)->getValue());
  $refered_by = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(35,$row)->getValue());
  $lead_source = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(36,$row)->getValue());
  $lead_source_description = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(37,$row)->getValue());
  $status = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(38,$row)->getValue());
  $status_description = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(39,$row)->getValue());
  $reports_to_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(40,$row)->getValue());
  $account_name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(41,$row)->getValue());
  $account_description = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(42,$row)->getValue());
  $contact_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(43,$row)->getValue());
  $account_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(44,$row)->getValue());
  $opportunity_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(45,$row)->getValue());
  $opportunity_name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(46,$row)->getValue());
  $opportunity_amount = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(47,$row)->getValue());
  $campaign_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(48,$row)->getValue());
  $birthdate = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(49,$row)->getValue());
  $portal_name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(50,$row)->getValue());
  $portal_app = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(51,$row)->getValue());
  $website = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(52,$row)->getValue());
  $client = $_SESSION['id'];
    

 $query = "INSERT INTO leads(
  date_entered, 
  date_modified,
  modified_user_id, 
  created_by, 
  description, 
  deleted, 
  assigned_user_id, 
  salutation, 
  first_name, 
  last_name, 
  title, 
  photo, 
  department,
  do_not_call, 
  phone_home, 
  phone_mobile, 
  phone_work, 
  phone_other, 
  phone_fax, 
  lawful_basis, 
  date_reviewed, 
  lawful_basis_source, 
  primary_address_street, 
  primary_address_city, 
  primary_address_state, 
  primary_address_postalcode,
  primary_address_country, 
  alt_address_street, 
  alt_address_city, 
  alt_address_state, 
  alt_address_postalcode, 
  alt_address_country, 
  assistant, 
  assistant_phone, 
  converted, 
  refered_by, 
  lead_source, 
  lead_source_description, 
  status, 
  status_description, 
  reports_to_id, 
  account_name, 
  account_description, 
  contact_id, 
  account_id, 
  opportunity_id, 
  opportunity_name,
  opportunity_amount, 
  campaign_id, 
  birthdate, 
  portal_name, 
  portal_app, 
  website, 
  client 
  ) VALUES(
  '".$date_entered."', 
  '".$date_modified."',
  '".$modified_user_id."',
  '".$created_by."',  
  '".$description."', 
  '".$deleted."', 
  '".$assigned_user_id."', 
  '".$salutation."', 
  '".$first_name."', 
  '".$last_name."', 
  '".$title."', 
  '".$photo."', 
  '".$department."',
  '".$do_not_call."', 
  '".$phone_home."', 
  '".$phone_mobile."', 
  '".$phone_work."', 
  '".$phone_other."', 
  '".$phone_fax."', 
  '".$lawful_basis."', 
  '".$date_reviewed."', 
  '".$lawful_basis_source."', 
  '".$primary_address_street."', 
  '".$primary_address_city."', 
  '".$primary_address_state."', 
  '".$primary_address_postalcode."',
  '".$primary_address_country."', 
  '".$alt_address_street."', 
  '".$alt_address_city."', 
  '".$alt_address_state."', 
  '".$alt_address_postalcode."', 
  '".$alt_address_country."', 
  '".$assistant."',
  '".$assistant_phone."', 
  '".$converted."', 
  '".$refered_by."', 
  '".$lead_source."', 
  '".$lead_source_description."', 
  '".$status."', 
  '".$status_description."', 
  '".$reports_to_id."', 
  '".$account_name."', 
  '".$account_description."', 
  '".$contact_id."', 
  '".$account_id."', 
  '".$opportunity_id."', 
  '".$opportunity_name."',
  '".$opportunity_amount."', 
  '".$campaign_id."',
  '".$birthdate."', 
  '".$portal_name."', 
  '".$portal_app."', 
  '".$website."', 
  '".$client."'
    
    
    )"; 
    
  if ($result= mysqli_query($connect, $query)){ 
    
     $output = '<label class="text-danger">Contacts Are Registered Sucessfully</label>'; //if non excel file then
    
     }

    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Not Registered, There Is Problem, Try Again Or Talk With Admin</label>'; //if non excel file then
 }
}
?>
<div>
 <?PHP  include 'nav.php'; ?>
</div>
  <center>
  <div class="container">
   <h3 align="center">Automatically Register All the Products in 1 Second</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Purchase Bill Excel Format</label>
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