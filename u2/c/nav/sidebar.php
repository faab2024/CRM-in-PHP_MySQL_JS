
<body class="w3-light-white w3-content" style="max-width:1700px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:230px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="/images/logo2.png" class="w3-circle w3-margin-right" style="width:80px">
    <b><?PHP  echo $_SESSION['name'];?></b>
   
  </div>
  <hr>
 
  <div class="w3-bar-block">
      
  
      
     <?PHP echo $home;?>
      
           
                
              <?PHP echo $leads;?>
           
              <?PHP echo $campaign;?>
                
             
               <?PHP echo $contacts;?>
               <?PHP echo $opportunities;?>
               
               
                
 </div>
 
  <hr>
   <a href="http://www.irontin.com/#contact" class="w3-bar-item w3-button">
                        <i class="fa fa-envelope"></i></a>

                    <a href="" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
                    
     <span><?PHP echo $logout;?></span>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;align:center">

  
  
  

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
