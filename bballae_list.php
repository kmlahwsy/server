<?php
    require('db.php');
    $check_b="SELECT * FROM b_list";
    $result_b=$mysqli->query($check_b);
    while($newrow_b = mysqli_fetch_array($result_b))
        {
            $b_stid = $newrow_b['st_id'];
            $check_u="SELECT * FROM user_info WHERE st_id=$b_stid";
            $result_u=$mysqli->query($check_u);
            $newrow_u = mysqli_fetch_array($result_u);
            $b_name = $newrow_u['name'];
            echo "<p> $b_name ($b_stid) <p>";
            echo "<br>";
        }
?>