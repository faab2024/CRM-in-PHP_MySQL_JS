 <?php
require_once 'config.php';
//login_required();
$title = "templates";
$tab = 'temp';
$templates = query("SELECT id,name,columns FROM templates ORDER BY id ASC");
$table = "";
foreach($templates as $row) {
    $plink = '<a href="" onClick="window.open(\'templates_preview.php?id='.$row['id'].'\',width=800,height=600)" title="preview"><img src="media/images/find.png" alt="preview"/></a>';
    $dlink = '<a href="templates_delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete this template?\');" title="delete"><img src="media/images/delete.png" alt="delete"/></a>';
    $elink = '<a href="templates_edit.php?id='.$row['id'].'" title="edit"><img src="media/images/page_edit.png" alt="edit"/></a>';
    $table .= "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['columns']."</td><td>".$plink." ".$dlink." ".$elink."</td></tr>\n";
}
$message = error_messages();
$content = <<<EOF
<a href="templates_new.php" class="large">new template &raquo;</a>
$message
<table>
    <tr>
        <th></th>
        <th>name</th>
        <th>columns</th>
        <th></th>
    </tr>
    $table
</table>
EOF;
include 'layout.php'; ?>