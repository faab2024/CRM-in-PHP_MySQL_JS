<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
 <?php include ("../c/c.php");?>
  
 <?php include ($nav);?>
 
<?php include ("../v/leads/index.php");?>

   
 <?php include ($ft);?>
         
