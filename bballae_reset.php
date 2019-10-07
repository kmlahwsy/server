<?php 
    require('db.php');
    $delete = "DELETE * FROM b_list";
    if ($delete) {
        echo "초기화 완료!";
    }
?>