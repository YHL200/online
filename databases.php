<?php

header("content-type:text/html;charset=utf8");

session_start();
//关闭所有的错误报告
error_reporting(0);
$connect = mysqli_connect('localhost','root','root','line')or die('数据库连接失败');

$sql="set names utf8 ";



mysqli_query($connect,$sql);





?>