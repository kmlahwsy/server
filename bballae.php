<?php
  $b_st_id = $_POST['b_st_id'];

  require('db.php');
    $bbbb=mysqli_query($mysqli,"INSERT INTO b_list (st_id) VALUES ('$b_st_id')");
    if($bbbb) {
      echo "추가완료!";
    }
    else
    {
     echo "<button onclick=\"location.href='bballae.html'\"> 이미 입력한 사람입니다. 뒤로가기 </button>";
    }
 
    echo "<br>";

  echo "<p>오늘 빨래통 나온 사람들: </p>";
  echo "<br>";
  $check_b="SELECT * FROM b_list";
  $result_b=$mysqli->query($check_b);
  while($newrow_b = mysqli_fetch_array($result_b))
    {
        $b_stid = $newrow_b['st_id'];
        $check_u="SELECT * FROM user_info WHERE st_id=$b_stid";
        $result_u=$mysqli->query($check_u);
        $newrow_u = mysqli_fetch_array($result_u);
        $b_name = $newrow_u['name'];
        echo "<p> $b_name ($b_stid) <p>";
        echo "<br>";
    }
?>

<br/>
<a href="bballae.html">
	<input type="button" name="b_continue" value="입력계속">
</a>
<a href="index.php">
	<input type="button" name="b_end" value="입력완료">
</a>