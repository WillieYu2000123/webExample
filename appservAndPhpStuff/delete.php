<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>Document</title>
</head>
<body>

<?php

$sid = $_GET['sid'];
$link = mysqli_connect('localhost','root','12345678','temp');
$sql  = "delete from students where sid = '$sid'";

if(mysqli_query($link, $sql))
{
    header("location:message.php?method=message&message=刪除成功");
}
else
{
    header("location:message.php?method=messagemessage=刪除失敗");
}




?>


</body>
<html>