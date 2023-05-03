<h1>Cookies</h1>
<?php
date_default_timezone_set("Asia/Taipei");
// set cookie format
setcookie('name','liu',strtotime("2023-05-03 10:50:00"));

// echo $_COOKIE['name'];

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
} 


// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";