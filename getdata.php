<?php



include 'databases.php';
header('content-type:application/json;charset=utf8');
$sql="select message,username from mymessage";

$result = mysqli_query($connect,$sql);

$results = array();

//mysql_fetch_assoc() 函数从结果集中取得一行作为关联数组，返回根据从结果集取得的行生成的关联数组!，如果没有更多行，则返回 false。

while ($row = mysqli_fetch_assoc($result)) {
    $results[] = $row;
}

$jsonResult =  json_encode($results);

echo $jsonResult;








?>