<?php

//$requestID = $_POST['requestID'];
//$userID = $_POST['userID'];
//$friendID = $_POST['friendID'];
//$result = $_POST['result'];

$requestID = 1;
$userID = 3;
$friendID = 1;
$result = 1;

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
$sqlcheck = ("update addFriend set state = '$result' where requestID = '$requestID';" );
$runcheck = mysqli_query($con, $sqlcheck);
if($runcheck == TRUE)
{
    echo $result;
    if($result == 1)
    {
        echo $result;
        $sqlcheck1 = ("insert into friend set userID = '$userID', friendID = '$friendID';" );
        $runcheck1 = mysqli_query($con, $sqlcheck1);
        if($runcheck1 == TRUE)
        {
            $sqlcheck2 = ("insert into friend set userID = '$friendID', friendID = '$userID';" );
            $runcheck2 = mysqli_query($con, $sqlcheck2);
            if($runcheck2 == TRUE)
            {
                echo 3;
            }
        }
    }
    echo 0;
}
else
{
    echo 1; //失败
}
?>