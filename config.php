<?php

define('DB_SERVER','localhost');
define('DB_USER','ironxpxj_admin');
define('DB_PASS' ,'!@#123qweasdzxc');
define('DB_NAME', 'ironxpxj_crm');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>