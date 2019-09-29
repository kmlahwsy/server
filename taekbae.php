<?php
 // $con_t=mysqli_connect("us-cdbr-iron-east-02.cleardb.net", "b0166a7ca9fa10", "88d08067", "t_list");
  
    $host = 'us-cdbr-iron-east-02.cleardb.net';
    $user = 'b0166a7ca9fa10';
    $pw = 'b0166a7ca9fa10';
    $dbName = 't_list';
    $mysqli_t = new mysqli($host, $user, $pw, $dbName);

    if ($mysqli_t){
      echo "MySQL 접속 성공";
    }
    else{
      echo "MySQL 접속 실패";
    }

    $t_name = $_GET['t_name'];
    $t_no = $_GET['t_no'];
      
    $sql_t="INSERT INTO t_list (name,no) VALUES ('$t_name','$t_no')";
    mysql_query($sql_t,$mysqli_t);
    echo "추가완료!";
    
    /*
    else
    {
     echo "<button onclick=\"location.href='taekbae.html'\"> 추가 실패, 다시 시도해주세요. </button>";
    }
    */

    mysqli_query($mysqli_t, $sql_t);
    mysqli_close($mysqli_t);


    $check="SELECT * FROM t_info WHERE name='$t_name' && no='$t_no'";
    $result=$mysqli->query($check); 

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

    echo "<p>오늘 택배 나온 사람: "
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