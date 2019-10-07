<?php 
    require('db.php');
    $delete = mysqli_query($mysqli,"DELETE FROM b_list");
    if ($delete) {
        echo "초기화 완료!";
    }
?>
<br />
<a href="bballae.html">
	<input type="button" name="b_continue" value="입력계속">
</a>