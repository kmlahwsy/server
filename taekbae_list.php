<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    오늘 나온 택배!
    </head>

</html>
<?php
     require('db.php');
     $check_t="SELECT * FROM t_list";
     $result_t=$mysqli->query($check_t);
     while($newrow_t = mysqli_fetch_array($result_t))
         {
             $t_name = $newrow_t['name'];
             $t_no = $newrow_u['no'];
             echo "<p> $t_name ($t_no) <p>";
             echo "<br>";
         }
?>