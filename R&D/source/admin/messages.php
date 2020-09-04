<?php
require_once 'config.php';
//login_required();
$title = "messages";
$tab = 'mess';
$table = "";
$messages = query("SELECT * FROM messages ORDER BY id ASC");
foreach($messages as $row) {
    $slink = '<a href="messages_send.php?id='.$row['id'].'" title="send message"><img src="media/images/email_go.png" alt="send message"/></a>';
    $plink = '<a href="messages_preview.php?id='.$row['id'].'" target="_new" title="preview"><img src="media/images/find.png" alt="preview"/></a>';
    $dlink = '<a href="messages_delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete this message?\');" title="delete"><img src="media/images/delete.png" alt="delete"/></a>';
    $elink = '<a href="messages_edit.php?id='.$row['id'].'" title="edit"><img src="media/images/page_edit.png" alt="edit"/></a>';
    $table .= '<tr><td>'.$row['id'].'</td><td>'.$row['subject'].'</td><td><a href="" onClick="window.open(\'templates_preview.php?id='.$row['template_id'].'\',width=800,height=600)" title="preview"><img src="media/images/find.png" alt="preview"/></a></td><td>'.$slink.' '.$plink.' '.$dlink.' '.$elink.'</td></tr>';
}
$message = error_messages();
$content = <<<EOF
<a href="messages_new.php" class="large">new message &raquo;</a>
$message
<table>
    <tr>
        <th></th>
        <th>subject</th>
        <th>template</th>
        <th></th>
    </tr>
    $table
</table>
EOF;
include 'layout.php'; ?>