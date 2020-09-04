		<?PHP
		$name="";
		$email="";
		$msg_to_user="";
		
		If($POST['name']!=""){
		    
		include_once 'connect_to_mysql.php';
		
		$name= $_POST['name'];
		$email =$_POST['email'];
		
		$sql=mysqli_query("SELECT * FROM newsletter2 WHERE email='$email' AND name='$name'");
		$numRows=mysql_num_rows($sql);
		
		  if(!$email){
		        $msg_to_user ='<br/><br/><h4><font color="FF000">Please type an email address'.$name.'</font>';
		  }else if($numTows>0) {
		  $msg_to_user='<br/><br/><h4><font color="FF000">Please type an email address'.$email.'</h4></font>';
	
		 }else{
		   $sql_insert=mysqli_connect("INSERT INTO newsletter2(name,email,dateTime) VALUES('$name','$email',now())") or die (mysql_error());
		
		$msg_to_user='<br/><br/><h4><font color="0066FF">Thanks'.$name.'You have been added succesffully';
		$name="";
		$email="";
		 }
		 
		}
		    
		    
		    
		
		
		
		?>
		
		<html>
		<head>
		<title>Lead Generator</title>
		</head>
		<body>
		<form  style="Width:440px;" action="<?PHP  echo $_SERVER['PHP_SELF'] ;?> " method="POST">
		<fieldset style="text-align:left;padding:24px;">
		<legend>Subscribe Our Newsletter &nbsp;</legend> 
		<br/>
		<input  type="text"  name="name" maxlength="36" value="<?PHP echo $name; ?>" /> </br>
		<input  type="text"  name="email" maxlength="36" value="<?PHP echo $email; ?>" /> </br><br/>
		<input name="mySubmitBtn" type="submit" value="Submit">
		<?PHP echo $msg_to_user; ?>
		</body>
		</html>
