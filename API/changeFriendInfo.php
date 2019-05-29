<?php

$userID = $_POST['userID'];
$friendID = $_POST['friendID'];
$remark = $_POST['remark'];
$groupName = $_POST['groupName'];

//$userID = 1;
//$friendID = 2;
//$remark = "光头";
//$groupName = "吴克";

$con=@new mysqli("94.191.100.98", "test_account", "test_account123");
//如果连接错误
if(mysqli_connect_errno()){
    echo 2; //数据库连接失败
    $con=null;
    exit;
}
mysqli_set_charset($con,'utf8');
mysqli_select_db($con, "test");

$sqlcheck = ("update friend set remark = '$remark' , groupName = '$groupName' where userID = '$userID' and friendID = '$friendID';" );
$runcheck = mysqli_query($con, $sqlcheck);
if($runcheck == TRUE)
{
    echo $remark; //成功
}
else
{
    echo 1; //失败
}
?>