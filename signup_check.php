<?php
    
    require('db.php');

    //id
    $id = $_POST['id'];

    //name
    $name = $_POST['name'];
    //name 변수의 charset 확인하기
    $charset_name = mb_detect_encoding($name, "EUC-KR, UTF-8, ASCII");
    //name 변수 unicode 인코딩
    iconv($charset_name, "UTF-8", $name);

    //password
    $password = $_POST['pw'];
    //password 변수의 charset 확인하기
    $charset_password = mb_detect_encoding($password, "EUC-KR, UTF-8, ASCII");
    //password 변수 unicode 인코딩
    iconv($charset_password, "UTF-8", $password);

    //st_id
    $st_id = $_POST['st_id'];

    $check="SELECT *from user_info WHERE id='$id'";
        
    $result=$mysqli->query($check);
    if($result->num_rows==1)
    {
        echo "중복된 아이디입니다.";
        echo "<button onclick=\"location.href='signup.html'\"> 돌아가기 </button>";
        exit();
    }

    $signup=mysqli_query($mysqli,"INSERT INTO user_info (id,name,pw,st_id) VALUES ('$id','$name','$pw','$st_id')");
    if($signup)
    {
        ?>
        <meta charset="utf-8" />
        <script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
        <meta http-equiv="refresh" content="0 url=/">
        <?php
    }
    else
        echo "<button onclick=\"location.href='signup.html'\"> 회원가입 실패, 돌아가기 </button>"
?>