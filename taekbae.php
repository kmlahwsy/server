<?php
  require('db_t.php');
  $t_name = $_GET['t_name'];
  $t_no = $_GET['t_no'];

  $tt=mysqli_query($mysqli,"INSERT INTO t_list (t_name,t_no) VALUES ('$t_name','$t_no')");
    if($tt)
    {
        ?>
        <meta charset="utf-8" />
        <meta http-equiv="refresh" content="0 url=/">
        <?php
        echo "<p>오늘 택배 나온 사람: $t_name </p>";
    }
?>

<br/>
<a href="taekbae.html">
	<input type="button" name="t_continue" value="입력계속">
</a>
<br />
<a href="index.php">
	<input type="button" name="t_end" value="입력완료">
</a>