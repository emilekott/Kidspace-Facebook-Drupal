<?php
if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on'){
    echo "HTTPS is on";
    
}
else {
    echo "HTTPS is off";
}
?>
