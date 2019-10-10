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
             $t_stid = $newrow_t['st_id'];
             $check_u="SELECT * FROM user_info WHERE st_id=$t_stid";
             $result_u=$mysqli->query($check_u);
             $newrow_u = mysqli_fetch_array($result_u);
             $t_name = $newrow_u['name'];
             echo "<p> $t_name ($t_stid) <p>";
             echo "<br>";
         }
?>