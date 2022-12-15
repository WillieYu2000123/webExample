<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入帳號</title>
</head>

<body>




    <form action="logincheck.php" method="post"> <!-- 這時就不適合繼續用dblink, 因為會讓dblink負擔太重 !-->
        <table>
            <tr>
                <td>帳號</td>
                <td><input type="text" name="ID" required></td>
            </tr>
            <tr>
                <td>密碼</td>
                <td><input type="password" name="password" required></td>
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