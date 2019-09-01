<?php
    
    require('db.php');

    $name_input = $_POST['name'];
    $id_input = $_POST['id'];
    
    $check_name="SELECT *from user_info WHERE username='$name_input'";
    $check_id="SELECT *from user_info WHERE userid='$id_input'";
    $result_name=$mysqli->query($check_name);
    $result_id=$mysqli->query($check_id);

    if($name = $row['name'] && $id = $row['id'])
    {
        echo $row['pw'];
        exit();
    }
?>