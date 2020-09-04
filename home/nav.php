<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RGU Technology</title>
        <meta charset="utf-8">
        <link href="/styles/multiselect.css" rel="stylesheet"/>
	<script src="multiselect.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


	
	
	
	
<style>
 html, body {
                border: 0;
                padding: 0;
                margin: 0;
                height: 100%;
            }
 body {
                background: white;
                font-size: 16px;
                background-color: #ffffff; 
                font-family: Arial;
                font-size: 18px;
                padding: 0px;
            }
             .textarea {
               width: 70%;
               height: 150px;
               padding: 12px 20px;
               box-sizing: border-box;
               box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
               border: 2px solid #ccc;
               border-radius: 10px;
               background-color: #fff;
               resize: none;
            }
            .container {
                align-items: center;
                background-color: #ffffff;
                padding: 10px 10px 10px 10px;
                border-radius: 0px;
            }
              .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                margin: 0 -16px;
            }
              .col-25 {
                -ms-flex: 25%; /* IE10 */
                flex: 25%;
            }
            .col-10 {
                -ms-flex: 15%; /* IE10 */
                flex: 15%;
            }
            .col-50 {
                -ms-flex: 50%; /* IE10 */
                flex: 50%;
            }
             .col-75 {
                -ms-flex: 75%; /* IE10 */
                flex: 75%;
            }
            .col-25,
            .col-50,
            .col-75 {
                padding: 0 16px;
            }
            .table-responsive {
                border-collapse: collapse;
                border-spacing: 0;
                width: 60%;
                box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
                font-family: lato;
                position: relative;
                color: #333;
                border-radius: 10px;
            }
            .w3-bar{
                 box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
                 border-radius: 4px;
            }
             .w3-sidebar{
                 box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
                 border-radius: 10px;
                 border: 3px;  
            }
             .w3-red{
                
               color: #ff3333;
            }
            .table-responsive{
                -sm|-md|-lg|-xl
            }

            th, td {
                text-align: left;
                padding: 10px;
            }
            th:first-child, td:first-child {
                text-align: center;
            }
            tr:nth-child(even) {
                background-color:#ffffff
            }
             input[type=text] {
                width: 30%;
                margin-bottom: 20px;
                padding: 12px;
                border: 3px;
                border-radius: 1px;
                background: white;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                font-family: lato;
                position: relative;
                color: #333;
                border-radius: 7px;
            }
            .btn {
                background-color: red;
                width: 20%;
                padding: 12px;
                height: 50px;
                font-family: 'Roboto', sans-serif;
                font-size: 24pxpx;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                color: #fff;
                border: 3px;
                border-radius: 10px;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
            }
            
                .title{

                    font-weight: 100;
                    letter-spacing: 2.5px;
                    padding: 12px;
                    border-radius: 10px;
                    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                    width: 100%;
                    padding: 5px 15px;
                    margin-top: 30px;
                    margin-bottom: 30px;
                }
                 h1,h2,h3,h4,h5,h6,h7,h8{

                font-weight: 100;
                letter-spacing: 2.5px;
                padding: 12px;
                border-radius: 10px;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                width: 60%;
                padding: 5px 15px;
                margin-top: 30px;
                margin-bottom: 30px;
            }

            
            
            
            
       .multiselect-wrapper {
	width: 180px;
	display: inline-block;
	white-space: nowrap;
	font-size: 12px;
	font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
}

.multiselect-wrapper .multiselect-input {
	width: 120px;
	padding-right: 50px;
}

.multiselect-wrapper label {
	display: block;
	font-size: 12px;
	font-weight : 600;
}

.multiselect-wrapper .multiselect-list {
	z-index: 1;
	position: absolute;
	display: none;
	background-color: white;
	border: 1px solid grey;
	border-bottom-left-radius: 2px;
	border-bottom-right-radius: 2px;
	margin-top: -2px;
}

	.multiselect-wrapper .multiselect-list.active {
		display: block;
	}

	.multiselect-wrapper .multiselect-list > span {
		font-weight: bold;
	}

	.multiselect-wrapper .multiselect-list .multiselect-checkbox {
		margin-right: 2px;
	}

	.multiselect-wrapper .multiselect-list > span,
	.multiselect-wrapper .multiselect-list li {
		cursor: default;
	}

.multiselect-wrapper .multiselect-list {
	padding: 5px;
	min-width: 200px;
}

.multiselect-wrapper ul {
	list-style: none;
	display: block;
	position: relative;
	padding: 0px;
	margin: 0px;
	max-height: 200px;
	overflow-y: auto;
	overflow-x: hidden;
}

	.multiselect-wrapper ul li {
		padding-right: 20px;
		display: block;
	}

		.multiselect-wrapper ul li.active {
			background-color: rgb(0, 102, 255);
			color: white;
		}

		.multiselect-wrapper ul li:hover {
			background-color: rgb(0, 102, 255);
			color: white;
		}

.multiselect-input-div {
	height: 34px;
}

	.multiselect-input-div input{
		border: 1px solid #ababab;
		background : #fff;
		margin: 5px 0 6px 0;
		padding: 5px;
		vertical-align:middle;
	}

.multiselect-count {
	position: relative;
	text-align: center;
	border-radius: 2px;
	behavior: url(/Content/Pie/pie.htc);
	background-color: lightblue;
	display: inline-block !important;
	padding: 2px 7px;
	left: -45px;
}

.multiselect-dropdown-arrow {
	width: 0;
	height: 0;
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-top: 5px solid black;
	position: absolute;
	line-height: 20px;
	text-align: center;
	display: inline-block !important;
	margin-top: 17px;
	margin-left: -42px;
}
 
    
    
    
</style>
</head>
<body>
    
   
      
        <!-- Top container -->
        <div class="w3-bar w3-top w3-red w3-large" style="z-index:4">
            <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
       
       </center> 
            <span class="w3-bar-item w3-right">RGU AI-CRM</span>
        </div>
        
        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:248px;" id="mySidebar"><br>
            <div class="w3-container w3-row">
                <div class="w3-col s4">
                    <img src="/images/logo2.png" class="w3-circle w3-margin-right" style="width:65px">
                </div>
                
                    <span><b><?PHP  echo $_SESSION['name'];?></b></span><br>
                   
                    
                    <a href="http://www.irontin.com/#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>

                    <a href="/home/profile.php" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
                    
                     
                 <hr>
                <span><a href="/spages/logout.php">Sign Out</a></span>
            </div>
            <hr>
            <div class="w3-bar-block">
                <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>Close Menu</a>
                <a href="/home/home.php" class="w3-bar-item w3-button w3-padding"><b>HOME</b></a>
                <a href="/home/leads.php" class="w3-bar-item w3-button w3-padding"><b>VIEW LEADS</b></a>
                <div class="w3-container w3-row">
                <a href="/home/lead.php" class="w3-bar-item w3-button w3-padding">Create Leads</a>
                <a href="/home/ileads.php" class="w3-bar-item w3-button w3-padding">Import Leads</a>
                </div>
                </div>
                <a href="" class="w3-bar-item w3-button w3-padding"><b>AUTOMATION</b></a>
                 <div class="w3-container w3-row">
                <a href="/home/email.php" class="w3-bar-item w3-button w3-padding">Send Emails</a>
                <a href="/home/camp.php" class="w3-bar-item w3-button w3-padding">Email Campaign</a>
                <a href="/home/emailing.php" class="w3-bar-item w3-button w3-padding">Email To Groups</a>
                </div> 
                <a href="/home/contacts.php" class="w3-bar-item w3-button w3-padding"><b>VIEW CONTACTs</b></a>
                <div class="w3-container w3-row">
                <a href="/home/contact.php" class="w3-bar-item w3-button w3-padding">Create Leads</a>
                <a href="/home/icontacts.php" class="w3-bar-item w3-button w3-padding">Import Leads</a>
                </div>
              <a href="/home/opportunities.php" class="w3-bar-item w3-button w3-padding"><b>Opportunities</b></a>
               
            </div>
        </nav>


        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


        
        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:320px;margin-top:43px;">
      
          
            
            
            