<?php
  $b_st_id = $_POST['b_st_id'];

  require('db.php');
    //$sql_t="INSERT INTO t_list (name,no) VALUES ('$t_name','$t_no')";
    $bbbb=mysqli_query($mysqli,"INSERT INTO b_list (id) VALUES ('$b_st_id')");
    if($bbbb) {
      echo "추가완료!";
    }
    else
    {
     echo "<button onclick=\"location.href='taekbae.html'\"> 추가 실패, 다시 시도해주세요. </button>";
    }


  echo "<p>오늘 빨래통 나온 사람들: </p>";
  $check_b="SELECT * FROM b_list";
  $check_u="SELECT * FROM user_info";
  $result_b=$mysqli->query($check_b); 
  $result_u=$mysqli->query($check_u);
  while($newrow = mysqli_fetch_array( $result_b ) )
    {
        $bid = $newrow['id'];
        echo $bid;
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