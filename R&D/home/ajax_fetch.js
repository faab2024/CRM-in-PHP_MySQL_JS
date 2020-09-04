var inProcess = false;//Just to make sure that the last ajax call is not in process
setTimeout( function () {
    if (inProcess) {
        return false;//Another request is active, decline timer call ...
    }
    inProcess = true;//make it burn ;)
    jQuery.ajax({
        url: 'info.php', //Define your script url here ...
        data: '', //Pass some data if you need to
        method: 'POST', //Makes sense only if you passing data
        success: function(answer) {
            jQuery('#mydiv').html(answer);//update your div with new content, yey ....
            inProcess = false;//Queue is free, guys ;)
        },
        error: function() {
            //unknown error occorupted
            inProcess = false;//Queue is free, guys ;)
        }
    });
}, 3000 );