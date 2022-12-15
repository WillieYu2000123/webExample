<!-- <!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <link rel="stylesheet" href="sample.css">
 </head>
 <body> -->
<!-- <div align=right>
   <a href="insert.htm">新增學生</a>
 </div> -->
<?php
session_start();
$searchtxt = $_POST['searchtxt'];
?>

<div align=center>
  <form method="post" action="index.php">
    <input type="hidden" name="method" value="query">
    <input type="text" name="searchtxt" value="<?php echo $searchtxt; ?>"><input type=submit value="Search">
  </form>
  <table class="List" width=500>
    <caption class="ListCap">學生資料
    <tr>
      <td>學號</td>
      <td>姓名</td>
      <td>功能</td>
    </tr>
    </caption>
    <?php

    $link = mysqli_connect('localhost', 'root', '12345678', 'temp');
    if (empty($searchtxt)) {
      $sql  = "select * from students";
    } else {
      $sql  = "select * from students where sname like '%" . $searchtxt . "%'";
    }
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)) {

      if($_SESSION['level'] == "admin")
      {
        echo "<tr><td>", $row['sid'], "</td><td>", $row['sname'], "</td><td><a href=index.php?method=update&sid=", $row['sid'], ">[修改]</a><a href=index.php?method=delete&sid=", $row['sid'], ">[刪除]</a></td></tr>";

      }
      else
      {
        echo "<tr><td>", $row['sid'], "</td><td>", $row['sname'], "</td></tr>";
      }




    }
    ?>
  </table>
</div>
<!-- </body>
</html> -->