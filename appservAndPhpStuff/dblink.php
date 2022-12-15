<?php 

$dbaction = $_POST['dbaction'];

$sid = $_POST['sid'];
$sname = $_POST['sname'];
$sphone = $_POST['sphone'];
$saddress = $_POST['saddress'];


$link = mysqli_connect('localhost', 'root', '12345678', 'temp');







if($dbaction == "insert")
{
    $sql = "INSERT INTO students(sid, sname, sphone, saddress) VALUES ('$sid', '$sname', '$sphone', '$saddress')"; //sid, sname順序可變但最好不要
    if(mysqli_query($link, $sql)){
        // echo "新增完成";
        header("Location:message.php?method=message&message=新增完成");
    }
    else{
        // echo "新增語法有錯";
        header("Location:message.php?method=message&message=新增語法有錯");
    }
}
else
{
    //這裡是修改
    $sql = "update students set sname='$sname', sphone='$sphone', saddress='$saddress' where sid = '$sid'"; //sid, sname順序可變但最好不要
    if(mysqli_query($link, $sql)){
        // echo "修改完成";
        header("Location:index.php?method=message&message=修改完成");
    }
    else{
        // echo "修改語法有錯<br>";
        header("Location:index.php?method=message&message=修改語法有錯");
    }


}
