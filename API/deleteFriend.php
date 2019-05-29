<?php

$userID = $_POST['userID'];
$friendID = $_POST['friendID'];
//$userID = 1;
//$friendID = 2;

$con=@new mysqli("94.191.100.98", "test_account", "test_account123");
//如果连接错误
if(mysqli_connect_errno()){
    echo 2; //数据库连接失败
    $con=null;
    exit;
}
mysqli_set_charset($con,'utf8');
mysqli_select_db($con, "test");

$sqlcheck = ("delete from friend where (userID = '$userID' and friendID = '$friendID') or (userID = '$friendID' and friendID = '$userID');");
$runcheck = mysqli_query($con, $sqlcheck);
if($runcheck == TRUE)
{
    echo 0; //删除成功
}
else
{
    echo 1; //删除失败
}
?>