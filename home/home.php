<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>

<body>
	 <!--Navbar(sit on top)-->
       <div class="menu">
          <?php include 'nav.php';?>
       </div>
      
        <center>
             <h1>Reports </h1>
             <br>
    
      

   
       <center>
       <h3>Registered Clients</h3>
     	<?php include 'peo.php';?>
	   
   
    
       <div class="menu">
           
          <?php include 'footer.php';?>
         
       </div>