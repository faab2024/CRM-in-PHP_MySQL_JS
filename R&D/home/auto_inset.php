<?PHP
$link = mysqli_connect("localhost", "my_user", "my_password", "world");
$times_to_run = 100;
$prize='';

for($i=1;$i<=$times_to_run;$i++){

    $array[] = array(
            'count' => $i,
            'code1' => randomString(),
            'prize' => $prize
    );
}

$codes = $array;

foreach ($codes as $code){

    $query1 = "INSERT INTO number (count,code,prize,printed) VALUES ('". $code['count']."','". $code['code1']."','". $code['prize']."','0')";

    $q = mysqli_query($link, $query1) or die (mysqli_error($link));

}
?>