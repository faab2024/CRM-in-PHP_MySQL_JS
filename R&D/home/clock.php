<?php 
$link = mysqli_connect("localhost", "bnsznyem_abfa","!@#123qweasdzxc", "bnsznyem_rgu");
if ($link === false) { 
	die("ERROR: Could not connect. "
				.mysqli_connect_error()); 
} 
//AND stime LIKE '%".$now."%'
$now = date("Y-m-d h:i");
$sql ="SELECT * FROM setEmail"; 
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
         //if($st==$now){
         $mail_result= mail($to,$subject,$mail_boy,$headers);
         if($mail_result){
           mysqli_query($link,"UPDATE setEmail SET send='1' WHERE id='$id' LIMIT 1");
         }
         //}
         
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
