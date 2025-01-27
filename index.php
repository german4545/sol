<?php
// Function to detect mobile devices
function isMobile() {
    return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);
}

// Check if the user is on a mobile device
if (isMobile()) {
    // Redirect to mobile version of the site
    header("Location: pump.html");
    exit();
} else {
    // Redirect to desktop version of the site
    header("Location: web.html");
    exit();
}
?>
   