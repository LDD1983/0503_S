<?php
include_once("common.php");
?>

<?php


$acc='admin';
$pw='1234';

// $user = ['admin','liu','judy'];
// $user_pw = ['1234','5678','5566'];

if($_POST['acc']==$acc && $_POST['pw']==$pw){
    echo "帳密正確，登入成功";
    $_SESSION['login']=$acc;
    if(isset($_SESSION['error'])){
    unset($_SESSION['error']);}

    header("location:member_center.php");
}else{
    // header("location:login.php?error=帳密錯誤，登入失敗");
    // echo "帳密錯誤，登入失敗";
    $_SESSION['error'] = "帳密錯誤，登入失敗";
    if(isset($_SESSION['login'])){
        unset($_SESSION['login']);}
        header("location:login.php");
}



?>
<br>
<br>
<br>
