<?php
require_once 'config.php';
login_required();
$id = (int) $_GET['id'];

$mess = query("SELECT * FROM messages WHERE id=$id");
$message = $mess[0];
$subject = $message['subject'];
$tid = $message['template_id'];

$data = query("SELECT body,columns FROM templates WHERE id=$tid LIMIT 1");
$template = $data[0]['body'];

if($data[0]['columns'] == "1") {
    $leftcol = $message['leftcol'];
    $body = str_replace('%content%', $leftcol, $template);
} else {
    $leftcol = $message['leftcol'];
    $rightcol = $message['rightcol'];
    $b = str_replace('%leftcol%', $leftcol, $template);
    $body = str_replace('%rightcol%', $rightcol, $b);
}
?>
<?php echo $body; ?>
<button type="button" onclick="self.close();">close window</button>