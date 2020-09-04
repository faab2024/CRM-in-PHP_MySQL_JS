<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
 <?php include ('../c/c.php');?>
 <?php include ($nav);?>
    
      
<div class="row"> 
<div class="col-25"> 
<?php include('../m/contacts_overview.php');?>
</br>
<?php include('../m/camp_overview.php');?>
</br>
<?php include('../m/pipeline.php');?>
</div>
<div class="col-25"> 
<?php include ('../m/leads_overview.php');?>
</br>
<?php include ('../m/automation_overview.php');?>
</br>
<?php include ('../m/tasks.php');?>
</div>
</div>
     
           
         
          <?php include ($ft);?>
       