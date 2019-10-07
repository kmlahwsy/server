<?php 
    require('db.php');
    $delete = mysqli_query($mysqli,"DELETE FROM t_list");
    if ($delete) {
        echo "초기화 완료!";
    }
?>
<br />
<a href="taekbae.html">
	<input type="button" name="t_continue" value="입력계속">
</a>