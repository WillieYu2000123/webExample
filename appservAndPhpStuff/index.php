<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生系統</title>
</head>

<body>
  
    <?php
    include "tools.php";

    $method = $_GET['method'];

    switch($method)
    {
        case "insert": include "insert.php"; break; //多擇一方法, 用完就break跳出
        case "update": include "update.php"; break;
        case "login": include "login.php"; break;
        case "delete": include "delete.php"; break;
        case "message": include "message.php"; break;
        case "logout": include "logout.php"; break;
        default: include "query.php"; break; //index專門做為索引
    }



    ?>
</body>

</html>