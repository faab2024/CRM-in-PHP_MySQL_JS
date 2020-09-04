<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>

<body>
	 <!--Navbar(sit on top)-->
       <div class="menu">
          <?php include 'nav2.php';?>
       </div>
      
        <center>
             <h1>Reports </h1>
             <br>
         <h3>Recent Contacts Sent</h3>
     	<?php include 'exp.php';?>
	
      

   
       <center>
       <h3>Registered Clients</h3>
     	<?php include 'peo.php';?>
	   
   
    
       <div class="menu">
           
          <?php include 'footer.php';?>
         
       </div>