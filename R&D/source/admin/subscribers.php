<?php
require_once 'config.php';
//login_required();
$title = "subscribers";
$tab = 'sub';
$table = "";
$messages = query("SELECT * FROM subscribers ORDER BY id ASC");
foreach($messages as $row) {
	$dlink = '<a href="subscribers_delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete this subscriber?\');" title="delete"><img src="media/images/delete.png" alt="delete"/></a>';
	$elink = '<a href="subscribers_edit.php?id='.$row['id'].'" title="edit"><img src="media/images/page_edit.png" alt="edit"/></a>';
	$table .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$dlink.' '.$elink.'</td></tr>';
}
$message = error_messages();
$content = <<<EOF
$message
<table>
	<tr>
		<th></th>
		<th>name</th>
		<th>email</th>
		<th></th>
	</tr>
	$table
</table>
EOF;
include 'layout.php'; ?>