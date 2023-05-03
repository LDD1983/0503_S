<h1>Session</h1>

<?php
include_once("common.php");
?>
<?php
// session_start();

$_SESSION['name'] = 'liu';

echo $_SESSION['name'];

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


?>
<br>

<a href="./logout.php">登出</a>





