<?php

$db_host = 'localhost';

$db_name = 'bnsznyem_rgu';
$db_username = 'bnsznyem_abfa';
$db_pass= '!@#123qweasdzxc';

mysql_connect($db_host,$db_username,$db_pass,$db_name) or die("could not connect to mysql"); 

mysql_select_db("$db_name") or die("no database");



?>