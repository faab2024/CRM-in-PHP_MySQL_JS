<!DOCTYPE html>
<html>
<body>

<?php
$number = 2000; 
$username_length = 7; 
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
        $randomN = $randomName0." ".$randomName1; 
    }
      
        $k = array_rand($tld); 
        $extension = $tld[$k]; 
        $fullAddress = strtolower( $randomName . "@" ."gmail".$extension); 
         $randnum= rand(1111111111,9999999999);
         $na[]=$$randomN;
        $generated_emails[] = $fullAddress;     
        echo "<br />".$fullAddress." ".$randomN." ".$randnum."<br />";  
        
        }
        
    }
    
}
generate_emails($number, $username_length); 
            
?>

</body>
</html>
