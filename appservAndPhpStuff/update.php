<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生資料</title>
</head>

<body> -->
    <?php
    session_start();

    if($_SESSION['name']<>"")
    {
        $SID = $_GET['SID'];
        $link = mysqli_connect('localhost', 'root', '12345678', 'temp');
        $sql = "select * from student where SID = '".$SID."'";
        $result = mysqli_query($link, $sql);

        if($row = mysqli_fetch_array($resut))
        {
            $SName = $row['sname'];
            $phone = $row['sphone'];
            $address = $row['saddress'];

        }
    }
    else
    {


        
            ?>
             <script>
                alert('請先登入喔，鳩咪~~');
                history.back();
                </script>
           


        
        <?php

        


    }

    //判斷有沒有人登入, 就進入修改

    $sid = $_GET['sid'];
    $link = mysqli_connect('localhost', 'root', '12345678', 'temp');

    $sql = "SELECT * FROM students where sid = '$sid'";
    $result = mysqli_query($link, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $sname = $row['sname'];
        $sphone = $row['sphone'];
        $saddress = $row['saddress'];
    }

    ?>



    <form action="dblink.php" method="post">
        <input type="hidden" name="dbaction" value="update">


        <table>
            <input type="hidden" name="sid" value=<?php echo $sid ?>>

            <tr>
                <td>學號</td>
                <td><?php echo $sid ?></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="sname" value="<?php echo $sname; ?>" required></td>
            </tr>
            <tr>
                <td>電話</td>
                <td><input type="text" name="sphone" value="<?php echo $sphone; ?>" required></td>
            </tr>
            <tr>
                <td>地址</td>
                <td><input type="text" name="saddress" value="<?php echo $saddress; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit">
                </td>
            </tr>
        </table>
        </from>
<!-- </body>

</html> -->