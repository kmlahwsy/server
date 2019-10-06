<?php
    require('db.php');

    $t_name = $_POST['t_name'];
    $t_no = $_POST['t_no'];
      
    //$sql_t="INSERT INTO t_list (name,no) VALUES ('$t_name','$t_no')";
    $taekbae=mysqli_query($mysqli,"INSERT INTO t_list (name, no) VALUES ('$t_name','$t_no')");
    if($taekbae) {
      echo "추가완료!";
    }
    else
    {
     echo "<button onclick=\"location.href='taekbae.html'\"> 추가 실패, 다시 시도해주세요. </button>";
    }


    //mysqli_query($mysqli_t, $sql_t);
    //mysqli_close($mysqli_t);

    echo "오늘 택배 나온 사람들";
    $check="SELECT * FROM t_list";
    $result=$mysqli->query($check); 
    while($newrow = mysqli_fetch_array( $result ) )
      {
          $tname = $newrow['name'];
          $tno =  $newrow['no'];
          echo $tname;
          echo "<br>";
      }

      /*
    //택배 리스트의 이름과 번호를 저장할 배열 선언
    $t_Name= array();
    $t_No= array();

    //택배 리스트 개수 세는 변수
    $count=0;

    //db의 택배 리스트의 정보들 가져오기
    if($result->num_rows==1)
    {
        $row=$result->fetch_array(MYSQLI_ASSOC);
  
        array_push($t_Name, $row['name']);
        array_push($t_No, $row['no']);
        $count = $count+1;
    }

    echo "<p>오늘 택배 나온 사람: ";
    //택배리스트 출력하기
    for($i = 1 ; $i <= $count; $i++){ 
      echo "<p>오늘 택배 나온 사람: $tname (번호 $tno) ,</p>";
    }

    /* 실패한 코드
    $query= "select * from t_list where name = '{$t_name}' && no = '{$t_no}'";
    $result= mysql_query($query,$con_t);
    while ($data = mysql_fetch_array($result))
    {
      $tname = $data['name'];
      $tno = $data['no'];
      echo "<p>오늘 택배 나온 사람: $tname (번호 $tno) </p>";
    }
    */
?>

<br/>
<a href="taekbae.html">
	<input type="button" name="t_continue" value="입력계속">
</a>
<br />
<a href="index.php">
	<input type="button" name="t_end" value="입력완료">
</a>