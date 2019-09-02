<?php
    
    require('db.php');

    $name_input = $_GET['name_input'];
    $id_input = $_GET['id_input'];
    
    $check_name="SELECT *from user_info WHERE username='$name_input'";
    $check_id="SELECT *from user_info WHERE userid='$id_input'";
    $result_name=$mysqli->query($check_name);
    $result_id=$mysqli->query($check_id);

    if($result_name->num_rows==1)
    {
        $row=$result_name->fetch_array(MYSQLI_ASSOC);

        if($result_id==$row['id_input'])
        {
            $result_name = $row['name_input'];
            $_SESSION['id_input']=$id;
            $_SESSION['name_input']=$name;

            if(isset($_SESSION['id_input'])) 
            {
              echo ("1234");
            }
        }
    }
?>