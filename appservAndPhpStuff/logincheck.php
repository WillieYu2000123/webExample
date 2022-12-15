<?php

session_start();
$ID = $_POST['ID'];
$password = $_POST['password'];

$link = mysqli_connect('localhost','root','12345678','temp');
$sql = "SELECT distinct * from account where id = '$ID' and password='$password'"; //distinct來取單一的

	 $result = mysqli_query($link,$sql);
	 if($row =mysqli_fetch_array($result))
	 {
		// 省時間做法: echo "登入成功";
		
		$_SESSION['name'] = $row['name'];
		$_SESSION['level'] = $row['level'];
		// session_destroy();

	  header("location:index.php?method=message&message=登入成功");
	 }
     else
     {
		// 省時間作法: echo "登入失敗";

        header("location:index.php?method=message&message=登入失敗");
     }


?>
