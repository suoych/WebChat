<?php


$userID = $_POST['userID'];
//$userID = 2;

$con=@new mysqli("94.191.100.98", "test_account", "test_account123");
//如果连接错误
if(mysqli_connect_errno()){
    echo 2; //数据库连接失败
    $con=null;
    exit;
}
mysqli_set_charset($con,'utf8');
mysqli_select_db($con, "test");

$sqlcheck = ("SELECT contact FROM (
SELECT friendID as contact, sendTime
FROM message
WHERE userID = '$userID'
UNION
SELECT userID as contact, sendTime
FROM message
WHERE friendID = '$userID'
) as allContact
GROUP BY contact
ORDER BY MAX(sendTime) DESC;");
$runcheck = mysqli_query($con, $sqlcheck);
if (!$runcheck) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
$data = array();
while ($row = mysqli_fetch_assoc($runcheck)) {
    $data[] = $row;
}
$json = json_encode($data);
//$utf8 = @preg_replace("/\\\u([0-9a-f]{4})/ie", "iconv('UTF-16BE', 'UTF-8', pack('H4','\\1'))", $json);
echo $json;
?>