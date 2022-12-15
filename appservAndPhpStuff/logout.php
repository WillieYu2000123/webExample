<?php

session_start();

$_SESSION['name'] = "";
$_SESSION['level'] = "";
header("location:index.php?method=message&message=資管二已登出");




?>