<?php

$userID = $_POST['userID'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$signature = $_POST['signature'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$imageUrl = $_POST['imageUrl'];


//$userID = '1';
//$nickname = 'sunflower';
//$password = 'toomuch';
//$signature = 'everytime';
//$gender = '2';
//$email = '3';
//$imageUrl = 'jpg';

$con=@new mysqli("94.191.100.98", "test_account", "test_account123");
//如果连接错误
if(mysqli_connect_errno()){
    echo 2; //数据库连接失败
    $con=null;
    exit;
}
mysqli_set_charset($con,'utf8');
mysqli_select_db($con, "test");

$sqlcheck = ("update user set nickname = '$nickname' , password = '$password' , signature = '$signature', gender = '$gender', email = '$email', imageUrl = '$imageUrl' where userID = '$userID';" );
$runcheck = mysqli_query($con, $sqlcheck);
if($runcheck == TRUE)
{
    echo 0; //成功
}
else
{
    echo 1; //失败
}
?>