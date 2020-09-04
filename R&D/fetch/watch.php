<?php
    date_default_timezone_set('YOUR TIMEZONE');
    echo $timestamp = date('H:i:s');
    
    ?>
<script>
    
    $(document).ready(function() {
    setInterval(timestamp, 1000);
});

function timestamp() {
    $.ajax({
        
        url: 'https://crm.regrowup.com/fetch/watch.php',
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}
</script>

<div id="timestamp"></div>