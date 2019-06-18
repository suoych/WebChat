<?php

//$requestID = $_POST['requestID'];
//$userID = $_POST['userID'];
//$friendID = $_POST['friendID'];
//$result = $_POST['result'];


$userID = 3;
$friendID = 1;

$con=@new mysqli("94.191.100.98", "test_account", "test_account123");
//如果连接错误
if(mysqli_connect_errno()){
    echo 2; //数据库连接失败
    $con=null;
    exit;
}
mysqli_set_charset($con,'utf8');
mysqli_select_db($con, "test");

//$sqlcheck = ("update user set nickname = '$nickname' and email = '$email' and profile = '$profile' where id = '$id';" );
$sqlcheck = ("insert into addFriend set userID = '$userID', friendID = '$friendID';" );
$runcheck = mysqli_query($con, $sqlcheck);
if($runcheck == TRUE)
{
    echo 0;
}
else
{
    echo 1; //失败
}
?>