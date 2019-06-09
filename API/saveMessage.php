<?php


$userID = $_POST['userID'];
$friendID = $_POST['friendID'];
$state = $_POST['state'];
$type = $_POST['type'];
$text = $_POST['text'];
$imageUrl = $_POST['imageUrl'];
$sendTime = $_POST['sendTime'];


//$userID = 3;
//$friendID = 1;
//$state = 0;
//$type = 0;
//$text = 0;
//$imageUrl = 0;
//$sendTime = '2019-06-02 14:44:46';




$con=@new mysqli("94.191.100.98", "test_account", "test_account123");
//如果连接错误
if(mysqli_connect_errno()){
    echo 2; //数据库连接失败
    $con=null;
    exit;
}
mysqli_set_charset($con,'utf8');
mysqli_select_db($con, "test");

$sqlcheck = ("insert into message set userID = '$userID', friendID = '$friendID', state = '$state', type = '$type', text = '$text', imageUrl = '$imageUrl', sendTime = '$sendTime';" );
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