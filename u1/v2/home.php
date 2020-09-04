<?php session_start();?>
<?PHP
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
<?PHP
include ("../c/c.php");
include ($nav);
?>
 

 
 
<div class="row"> 
<div class="col-25"> 
<?php include ($contacts_ov);?>
</br>
<?php include ($camp_ov);?>
</br>

<?php include ($pipeline);?>
</div>
<div class="col-25"> 
<?php include ($leads_ov);?>
</br>
<?php include ($automation_ov);?>
</br>
<?php include ($tasks);?>
</div>
</div>

<?php include ($ft);?>