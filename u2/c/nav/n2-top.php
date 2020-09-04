<?php include ("../c/v.php");?>
<!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/images/logo.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
   
    <div class="w3-section w3-bottombar w3-padding-16">
     <span class="title"><b><?PHP echo $_GET['title'];?></b></span>
     <span class="w3-margin-right"  ><a href="<?PHP echo $_GET['l'];?>"><?PHP echo $_GET['item1'];?></a></b></span>
     <span class="w3-margin-right"  ><a href="<?PHP echo $_GET['li'];?>"><?PHP echo $_GET['item2'];?></a></b></span
     <form class="form-inline">
    <input class="" type="search" placeholder="Search" aria-label="Search">
    <button class="btn-search" type="submit">Search</button>
  </form>
    
   </div> 

  </header>