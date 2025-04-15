<?php
include "connect.php";
$x="select * from students";
$tot=$connect->query($x);
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>View Students</title>
      <link rel="stylesheet" href="tableui.css">
</head>
<body class="b1">
      <div class="d1">
            <table class="t1">
            <tr class="th1">
                  <th class="th1">Name</th>
                  <th class="th1">Age</th>
                  <th class="th1">Email</th>
                  <th class="th2">Contact</th>
            </tr>
            <?php
            if($tot->num_rows>0 ){
                  while ($rows=$tot->fetch_assoc()){
                  echo "<tr>
                  <td class='th1'>".$rows['studentname']."</td>
                  <td class='th1'>".$rows['age']."</td>
                  <td class='th1'>".$rows['email']."</td>
                  <td class='th2'>".$rows['contact']."</td>
                  </tr>";
                  };
            }
            else{
                  echo" <tr><td colspan=4 class='th1'>no records found</td></tr>";
            };
            ?>
            </table>
      </div>
</body>
</html>