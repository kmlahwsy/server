<?php 
    require('db.php');
    $delete = "DELETE FROM b_list";
    if ($delete) {
        echo "삭제 완료!";
    }
?>