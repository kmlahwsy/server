<?php
    
    require('db.php');

    $name = $_POST['name'];
    $id = $_POST['id'];
    
    $check_name="SELECT *from user_info WHERE username='$name'";
    $check_id="SELECT *from user_info WHERE userid='$id'";
    $result=$mysqli->query($check);
    if($result->num_rows==1)
    {
        echo "중복된 아이디입니다.";
        echo "<button onclick=\"location.href='signup.html'\"> 돌아가기 </button>";
        exit();
    }

    $signup=mysqli_query($mysqli,"INSERT INTO user_info (id,name,pw) VALUES ('$id','$name','$pw')");
    if($signup)
    {
        ?>
        <meta charset="utf-8" />
        <script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
        <meta http-equiv="refresh" content="0 url=/">
        <?php
    }
    else
        echo "<button onclick=\"location.href='signup.html'\"> 회원가입 실패, 돌아가기 </button>";
?>