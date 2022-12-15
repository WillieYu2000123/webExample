<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生資料</title>
</head>

<body>




    <form action="dblink.php" method="post">


        <input type="hidden" name="dbaction" value="insert">
        <table>
            <tr>
                <td>學號</td>
                <td><input type="text" name="sid" required></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="sname" required></td>
            </tr>
            <tr>
                <td>電話</td>
                <td><input type="text" name="sphone" required></td>
            </tr>
            <tr>
                <td>地址</td>
                <td><input type="text" name="saddress" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit">
                </td>
            </tr>
        </table>
        </from>
</body>

</html>