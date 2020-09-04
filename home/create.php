
<!DOCTYPE html>
<html>
<body>

<?php
 

$number = $_POST['numField'];
$code = $_POST['code'];
$username_length = $_POST['userField']; 

function generate_emails($number, $username_length) {
if (is_numeric($number) && $number != 0) {
    if ($number > 1000) { //put hard limit on generate request
        $number = 1000; 
    }
    $generated_email_addresses = array(); 
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $firstname = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lastname = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $nm="0123456789";
    $databaseHost = 'localhost';
    $databaseName = 'bnsznyem_rgu';
    $databaseUsername = 'bnsznyem_abfa';
    $databasePassword = '!@#123qweasdzxc';
    $connect = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    
    $char_count = count($characters); 
    $tld = array(".com"); 
    for ($i=0; $i<$number; $i++){
        $randomName0 = '';
        $randomName1 = '';
        //$randomName2 = '';
        $randomName2 = rand(1,2019);
        for($j=0; $j<$username_length; $j++){
        $randomName0 .= $firstname[rand(0, strlen($firstname)-1)];
          
        $randomName1 .= $lastname[rand(0, strlen($lastname)-1)]; 
          
       //  $randomName2 .= $nm[rand(0, strlen($nm)-1)];  
         
        $randomName = $randomName0.".".$randomName1.$randomName2;
          $fn = strtolower($randomName0);
          $ln = strtolower($randomName1);
          $Fn=ucfirst($fn);
          $Ln=ucfirst($ln);
        $randomN = $Fn." ".$Ln; 
    }
      
        $k = array_rand($tld); 
        $extension = $tld[$k]; 
        $fullAddress = strtolower( $randomName . "@" ."gmail".$extension); 
         $randnum= rand(1111111111,9999999999);
         $na[]=$$randomN;
         $code;
        $generated_emails[] = $fullAddress; 
         echo "<center>Generated Phone No(USA,Canada): "."+1".$randnum."</center><br>";
    
   /* 
   $Name = $randomN;
	$Phone = $randnum;
	$Email = $fullAddress;
    //$Location =$_POST['location'];
	$client = $_SESSION['id'];

    $query ="INSERT INTO lead(name,email,phone,client) VALUES('$Name','$Email','$Phone','$client')"; 
    mysqli_query($connect, $query);
    */
        
        }
        
    }
    
   // header('Content-Type: text/csv; charset=utf-8'); 
	//header('Content-Disposition: attachment; filename=NewGeneratedLeads'); 
	//$output = fopen('php://output', 'w'); 
	//fwrite($output, "Generated $email_count random test e-mails:<br>");  
	//fwrite($output, "    "); 
	//fputcsv($output, $generated_emails,$randomN,$randnum); 
    
}


generate_emails($number, $username_length); 



  
 
?>
</body>
</html>
