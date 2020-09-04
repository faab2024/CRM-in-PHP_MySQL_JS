<?php
require_once 'admin/config.php';
$newsletters = query("SELECT * FROM newsletters WHERE visible=1");
$subscriptions = '';
foreach($newsletters as $nl) {
    $subscriptions .= '
    <input type="checkbox" name="newsletter['.$nl["id"].'][subscribe]" value="true" '.$checked.'/>
    <label for="newsletter['.$nl["id"].']">'.$nl['name'].'</label>
    <input type="hidden" name="newsletter['.$nl["id"].'][nlid]" value="'.$nl['id'].'" /><br />
    '.$nl["description"].'<br />
    ';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>my newsletters</title>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    </head>
    <body>
        <div id="header">
            <h1>my newsletters</h1>
        </div>
        <div id="container">
            <h3>Subscribe to our newsletters!</h3>
            <form action="subscribe.php" method="POST">
                <p>
                    <label for="name">Name:</label><br />
                    <input type='text' name='name' class="text" /> 
                </p>
                <p>
                    <label for="email">Email</label><br />
                    <input type="text" name="email" class="text" /> 
                </p>
                <p>
                    <strong>Newsletters:</strong><br />
                    <?php echo $subscriptions; ?>
                </p>
                <p>
                    <input type='submit' value='Subscribe &raquo;' />
                    <input type='hidden' value='1' name='submitted' /> 
                </p>
            </form>
        </div>
    </body>
</html>