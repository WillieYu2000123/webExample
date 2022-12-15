<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>學生系統</title>
    <!-- <link rel="stylesheet" href="sample.css"> -->
</head>

<body>
    <div align=right>
        <a href="index.php?method=insert">新增學生</a>
      
        <?php
        session_start();
if($_SESSION['name'] <> "")  //==換<>?
{
    echo "Hi", $_SESSION['name'];

?>
<a href="index.php?method=logout">登出</a>
<?php
    }
    else
    {
?>

<a href="index.php?method=login">登入系統</a>

<?php
    }

//    session_destroy();

?>



        <a href="index.php?method=index">回首頁</a>
    </div>

</body>

</html>