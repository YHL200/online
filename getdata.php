<?php



include 'databases.php';
header('content-type:application/json;charset=utf8');
$id =intval($_GET['id']);

$sql="select  messageID,message,username from mymessage WHERE messageID >$id";

//echo $sql;exit();

$result = mysqli_query($connect,$sql);

$results = array();

//mysql_fetch_assoc() 函数从结果集中取得一行作为关联数组，返回根据从结果集取得的行生成的关联数组!，如果没有更多行，则返回 false。

while ($row = mysqli_fetch_assoc($result)) {
    $results[] = $row;
}

$jsonResult =  json_encode($results);

echo $jsonResult;








?>