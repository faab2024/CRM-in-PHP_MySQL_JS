<?php
require_once 'config.php';
//login_required();
$title = "newsletters";
$newsletters = query("SELECT * FROM newsletters ORDER BY id ASC");
$tab = 'nl';
$table = '';
foreach($newsletters as $row) {
	$dlink = '<a href="newsletters_delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete this newsletter?\');" title="delete"><img src="media/images/delete.png" alt="delete"/></a>';
	$elink = '<a href="newsletters_edit.php?id='.$row['id'].'" title="edit" ><img src="media/images/page_edit.png" alt="edit"/></a>';
	if($row['visible'] == "1") {$visible = '<img src="media/images/bullet_green.png" />';} else {$visible = '<img src="media/images/bullet_red.png" />';}
	$table .= "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['description']."</td><td>$visible</td><td>$dlink $elink</td></tr>\n";
}
$message = error_messages();
$content = <<<EOF
<a href="newsletters_new.php" class="large">new newsletter &raquo;</a>
$message
<table>
	<tr>
		<th></th>
		<th>name</th>
		<th>description</th>
		<th>visible</th>
		<th></th>
	</tr>
	$table
</table>
EOF;
include 'layout.php';
?>