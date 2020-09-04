<?php 
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
if ($link === false) { 
	die("ERROR: Could not connect. "
				.mysqli_connect_error()); 
} 
//AND stime LIKE '%".$now."%'
$now = date("Y-m-d h:i");
//set_date_default_timezone("Asia/Kolkata");
//$now = date("2019-11-08");
$sql ="SELECT * FROM camps WHERE send='0' AND period='Daily' LIMIT 20"; 
if ($res = mysqli_query($link, $sql)) { 
	if (mysqli_num_rows($res) > 0) { 
		while ($row = mysqli_fetch_array($res)) { 
		 $st=$row['stime'];
		 $id=$row['id'];
         $to=$row['recp'];
         $sender=$row['sender'];
         $mail_body=$row['message'];
         $subject=$row['subject'];
         $headers = 'From:'.$sender;
         $client=$row['client'];
         $headers="Content-type:text/html\r\n";
         $mail_b='
         <html>
		<head>
		<title>Email</title>
		</head>
		<body>'
	    .$body.'<br>If you do not want recieving this email again, click <a href="https://crm.regrowup.com/R&D/automation/optin.php?e='.$to_email.'">Unsubcribe</a>'.
		'<P>RGU Inc</P>
		<hr>
		If you do not want recieving this email again, click <a href="https://crm.regrowup.com/R&D/automation/optout.php?e='.$to_email.'&k='.$client.'">Unsubcribe</a>
		
		</body>
		</html>
         ';
         
         
         
         
         
         
         
         
        // $now = date("Y-m-d");
        $now = date("Y-m-d h:i");
        if($st=$now){
        // $mail_result= mail($to,$subject,$mail_boy,$headers);
         if($mail_result){
           mysqli_query($link,"UPDATE camps SET send='0' WHERE id='$id' LIMIT 1");
         }
        }
         
		} 
		mysqli_free_res($res); 
	} 
	else { 
		echo "No matching records are found."; 
	} 
} 
else { 
	echo "ERROR: Could not able to execute $sql.".mysqli_error($link); 
} 
mysqli_close($link); 
?> 
