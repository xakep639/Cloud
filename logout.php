<?php
//session_start();
//session_destroy();
//header("location:index.php");
?>
<center>
<table border="0" height="500" width="950">
    <tr><td> <span id="countdown" class="timer" style='font-size: 280px;'></span>
<script>
var seconds = 01;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
       
       location='index.php';
        //document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>     </td>
<td align="center">
<?php

// Inialize session
session_start();
session_destroy();

// Delete certain session
//unset($_SESSION['username']);
// Delete all session variables
// session_destroy();

 echo '<meta http-equiv="refresh" content="2;url=index.php">';
 echo'<span><font size="5" color="#337033">Logging out please wait...</font><br><img width="60" height="60" src="ajax-loader.gif"></span>';


// Jump to login page
//header('Location: index.php');

?>
    
</td>
</tr>
</table>
</center>
