<?php
  $t_name = $_GET['t_name'];
  echo "<p>오늘 택배 나온 사람: $t_name</p>";
?>

<br/>
<a href="taekbae.html">
	<input type="button" name="t_continue" value="입력계속">
</a>
<a href="index.php">
	<input type="button" name="t_end" value="입력완료">
</a>
</form>