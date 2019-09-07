<?php
  require('db_t.php');
  $t_name = $_GET['t_name'];
  $t_no = $_GET['t_no'];

  mysqli_query($mysqli,"INSERT INTO t_list (name,no) VALUES ('$t_name','$t_no')");
  echo "<p>오늘 택배 나온 사람: $t_name (번호 $t_no) </p>";
?>

<br/>
<a href="taekbae.html">
	<input type="button" name="t_continue" value="입력계속">
</a>
<br />
<a href="index.php">
	<input type="button" name="t_end" value="입력완료">
</a>