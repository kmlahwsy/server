<?php
  require('db_t.php');
  mysqli_query($con_t, $sql_t);
  if($con_t)
    {
      $t_name = $_GET['t_name'];
      $t_no = $_GET['t_no'];
      $sql_t="INSERT INTO t_list (name,no) VALUES ('$t_name','$t_no')";
      mysql_query($sql_t,$con_t);
      echo "추가완료!";
    }
    else
    {
     echo "<button onclick=\"location.href='taekbae.html'\"> 추가 실패, 다시 시도해주세요. </button>";
    }

    $query= "select * from t_list where name = '{$t_name}' && no = '{$t_no}'";
    $result= mysql_query($query,$con_t);
    while ($data = mysql_fetch_array($result))
    {
      $tname = $data['name'];
      $tno = $daya['no'];
      echo "<p>오늘 택배 나온 사람: $tname (번호 $tno) </p>";
    }
  mysqli_close($conn);
?>

<br/>
<a href="taekbae.html">
	<input type="button" name="t_continue" value="입력계속">
</a>
<br />
<a href="index.php">
	<input type="button" name="t_end" value="입력완료">
</a>