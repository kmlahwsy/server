<?php
    
    require('db.php');

    $name = $_POST['name'];
    $id = $_POST['id'];
    
    $check_name="SELECT *from user_info WHERE username='$name'";
    $check_id="SELECT *from user_info WHERE userid='$id'";

    $result_name=$mysqli->query($check_name);
    $result_id=$mysqli->query($check_name);

    if($result_name->num_rows==1 && $result_id->num_rows==1)
    {
        echo pw;
        exit();
    }
?>