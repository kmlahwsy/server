<?php
  require('db_t.php');
  $t_name = $_GET['t_name'];
  $t_no = $_GET['t_no'];

  $sql_t=mysqli_query($mysqli,"INSERT INTO t_list (name,no) VALUES ('$t_name','$t_no')");
  if($signup)
    {
        ?>
        <meta charset="utf-8" />
        <script type="text/javascript">alert('추가 완료!');</script>
        <meta http-equiv="refresh" content="0 url=/">
        <?php
    }
    else
        echo "<button onclick=\"location.href='signup.html'\"> 추가 실패, 다시 시도해주세요. </button>";
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