<?php

     	include_once 'connection.php';
		$sql=mysqli_query("SELECT * FROM setEmail WHERE send='0' LIMIT 20");
		
		//$query = mysql_query("SELECT id, n FROM test_users");
        while($row = mysql_fetch_array($sql))
        echo $row['id'] . " - " . $row["subject"] . " is from " . $row["message"] . "<br />";
	    /*
	    while($row= mysqli_fetch_array($sql)){
         $id=$row['id'];
         $to=$row['recp'];
         $sender=$row['sender'];
         $mail_body=$row['message'];
         $subject=$row['subject'];
         $headers = 'From:'.$sender;
         $mail_result= mail($to,$subject,$mail_boy,$headers);
         if($mail_result){
         
           mysqli_query("UPDATE setEmail SET send='1' WHERE id='$id' LIMIT 1");
         }
	    }
	    echo $to;
	    echo $sender;
	    echo $subject;
         */
?>