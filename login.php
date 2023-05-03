<?php
include_once("common.php");
$here = 'front';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
     <style>
        form {
    border: 1px solid lightcoral;
    border-radius: 10px;
    margin: 10% auto;
    width: 40%;
    padding: 20px;
    box-shadow: 0 0 10px lightcoral;
}

input[type="submit"] {
    border: 0;
    background-color: lightsteelblue;
    border-radius: 5px;
    display: block;
    width: 40px;
    margin: 0px auto;
    margin-top: 10px;
}
input,label{
    display: block;
    width: 200px;
    margin: 0px auto;

}
     </style>
</head>
<body>





<?php


if(isset($_SESSION['login'])){
    // echo "登入成功!";
    echo "歡迎，";
    echo $_SESSION['login'];
    echo"<br>";
    echo "<a href='logout.php'>登出</a>";

}else{

}
 ?> 

<?php include("header.php")?>



<form action="check.php" method="post">
    <div>
        <?php
        if(isset($_SESSION['error'])){
            echo "帳密錯誤!";
        }
?>
    </div>
    <div>
        <label for="acc">帳號:</label>
        <input type="text" name="acc" id="acc">
    </div>
    <div>
        <label for="pw">密碼:</label>
        <input type="password" name="pw" id="pw">
    </div>
    <div>
        <input type="submit" value="登入">
    </div>
</form>
    



</body>
</html>