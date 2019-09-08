<?php
  $t_name = $_GET['t_name'];
  $t_no = $_GET['t_no'];

  $con_t=mysqli_connect("us-cdbr-iron-east-02.cleardb.net", "b0166a7ca9fa10", "88d08067", "t_list");
  $sql_t="INSERT INTO t_list (name,no)";
  $sql_t .= "VALUES ('$t_name','$t_no')";
  mysqli_query($con_t, $sql_t);
  mysqli_close($con_t);
  if($sql_t)
    {
        ?>
        <meta charset="utf-8" />
        <script type="text/javascript">alert('추가 완료!');</script>
        <?php
    }
    else
        echo "<button onclick=\"location.href='taekbae.html'\"> 추가 실패, 다시 시도해주세요. </button>";
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