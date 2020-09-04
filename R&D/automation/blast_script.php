 <?PHP
       include_once "connect_to_mysql.php";
		$sql=mysqli_connect("SELECT * FROM newsletter2 WHERE received='0' LIMIT 20");
	    $mail_body='';
	    while($row= mysqli_fetch_array($sql)){
         $id=$row['id'];
         $email=$row['email'];
         $name=$row['name'];
         
         $mail_body='
         <html>
		<head>
		<title>Email</title>
		</head>
		<body>
		<h1>Hello; $name</h1>
		<P> Thi is  A NEWS letter sending demo</P>
		<P>RGU Inc</P>
		<hr>
		If dont want recieving this message again <a href="https://crm.regrowup.com/automation/optout.php?e=$email">Unsubcribe</a>
		
		</body>
		</html>
         ';
         $subject='Newsletter';
         $headers="From: system@regrowup.com\r\n";
         $headers="Content-type:text/html\r\n";
         $to="$email";
         $mail_result= mail($to,$subject,$mail_body,$headers);
         if($mail_result){
         
           mysqli_query("UPDATE newsletter SET received='1' WHERE email='$email' LIMIT 1");
             
         }
         

	    }





?>