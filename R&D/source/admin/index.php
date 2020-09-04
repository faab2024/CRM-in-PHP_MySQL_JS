<?php
require_once 'config.php';
//login_required();

$users = count_query("SELECT COUNT(*) AS num FROM users");
$emails = count_query("SELECT COUNT(*) AS num FROM subscribers");
$subs = count_query("SELECT COUNT(*) AS num FROM subscriptions");
$nls = count_query("SELECT COUNT(*) AS num FROM newsletters");
$mess = count_query("SELECT COUNT(*) AS num FROM messages");
$temps = count_query("SELECT COUNT(*) AS num FROM templates");

$title = "Home!";
$content = <<<EOF
<h3>current stats</h3>
<p>$users user registered</p>
<p>$emails subscribers</p>
<p>$subs newsletter subscriptions</p>
<p>$nls newsletters</p>
<p>$mess messages</p>
<p>$temps templates</p>
EOF;
include 'layout.php';
?>