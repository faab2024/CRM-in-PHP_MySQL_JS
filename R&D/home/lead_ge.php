<?PHP include('nav.php');?>

<?php

ini_set('default_charset', 'UTF-8'); 
?>
<html>
<title>RGU AI-CRM</title>
<meta name="keywords" content="RGU AI Leader Generator">
<meta name="description" content="This random e-mail generator tool gives you a large set of test e-mail accounts for use in testing and debugging">
<meta name="author" content="Zack Proser">
<link href='http://fonts.googleapis.com/css?family=Cutive' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

<script>
$(function() {
	$(document).tooltip({
		position: {
			my: "center bottom-20", 
			at: "center top", 
			using: function( position, feedback) {
				$( this ).css( position ); 
				$( "<div>")
				 .addClass( "arrow" )
				 .addClass( feedback.vertical )
				 .addClass( feedback.horizontal )
				 .appendTo( this ); 
			}
		}
	}); 
}); 
</script>
<head>
<style type="text/css">


h1 {
	font-size: 58px; 
	font-family: Cutive; 
	text-align: center; 
	color: #fff; 
	padding-top: 100px; 
	-moz-font-smoothing: none;
	font-smoothing: antialiased;
}

p {
	font-family: Cutive;
	text-align: right;
	padding-top: 7px; 
	color: #fff;
	font-size:14px;
}

#headline {
	display: inline;
}




div#container {
	width: 270px; 
	height: 150px; 
	position: absolute; 
	left: 50%; 
	top: 40%; 
	margin: -75px 0 0 -135px;

 

}
div#container2 {
	width: 500px;
	height: 150px; 
	position: absolute; 
	left: 50%; 
	top: 65%; 
	margin: -75px 0 0 -135px; 
 

}
div#top-banner {
	width: 400px;
	height: 200px; 
	position: absolute; 
	left: 50%; 
	top: 50%; 
	margin: -184px 0 0 -335px;

}

.field {
	position: relative; 
	top: 25%; 
	width: 600px; 
	height: 40px; 
	background-color: #fff; 
	-webkit-border-radius: 9px; 
	-moz-border-radius: 9px; 
	border-radius: 9px; 
	border: 2px solid grey; 
	padding: 10px; 
}

.ui-tooltip, .arrow:after {
	background: white;
	border: 3px solid grey;
}

.ui-tooltip {
	padding: 10px 20px;
	color: #2E8DF5; 
	border-radius: 15px;
	font: 14px "Cutive";
	box-shadow: 0 0 7px black;
}

.arrow {
	width: 70px; 
	height: 16px; 
	overflow: hidden;
	position: absolute;
	left: 50%; 
	margin-left: -35px;
	bottom: -16px; 
}

.arrow.top {
	top: -16px; 
	bottom: auto;
}

.arrow.left {
	left: 20%;
}

.arrow:after {
	content: "";
	position: absolute; 
	left: 20px; 
	top: -20px; 
	width: 25px; 
	height: 25px; 
	box-shadow: 6px 5px 9px -9px black; 
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotatet(45deg);
	transform: rotate(45deg);
}

    .myButton {
        
        -moz-box-shadow: 0px 10px 14px -7px #3e7327;
        -webkit-box-shadow: 0px 10px 14px -7px #3e7327;
        box-shadow: 0px 10px 14px -7px #3e7327;
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
        background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
        background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
        background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
        background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
        background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
        
        background-color:#77b55a;
        
        -moz-border-radius:13px;
        -webkit-border-radius:13px;
        border-radius:13px;
        
        border:1px solid #4b8f29;
        
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:28px;
        font-weight:bold;
        padding:8px 17px;
        text-decoration:none;
        
        text-shadow:0px 1px 0px #5b8a3c;
        
    }
    .myButton:hover {
        
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
        background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
        background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
        background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
        background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
        background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
        
        background-color:#72b352;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }


</style>
</head>
<body>
    <h4>AI Unlimited Leads&Contacts Generator </h4>
   
        



<form action="" method="post">
	<input class="field" type="text" name="numField" id="numField" placeholder="Enter No(0-2000) To Generate Lead" /><br>
   
	<input type="Submit" class="myButton" id="submit" name="ger" value="Generate Leads By Phone No" />

</form>

</div>
<br></br>
<?PHP include('create.php');?>




<?PHP include('footer.php');?>