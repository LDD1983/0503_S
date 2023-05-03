<?php
include_once("common.php");
?>


<?php
// session_start();

// echo "已登出" . $_SESSION['name'];

unset($_SESSION['error']);
unset($_SESSION['login']);

header("location:login.php");

