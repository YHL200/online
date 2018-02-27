<?php

header("content-type:text/html;charset=utf8");
include 'databases.php';

$sql = "INSERT INTO mymessage (message,username) VALUES('$_POST[in]','$_POST[username]')";
mysqli_query($connect,$sql);



?>


