<?php
    
    require('db.php');

    $id = $_GET['id'];
    $name = $_GET['name'];
    $pw = $_POST['pw'];
    $st_id = $_POST['st_id'];

    $check="SELECT *from user_info WHERE userid='$id'";
    $result=$mysqli->query($check);
    if($result->num_rows==1)
    {
        echo "중복된 아이디입니다.";
        echo "<button onclick=\"location.href='signup.html'\"> 돌아가기 </button>";
        exit();
    }

    $signup=mysqli_query($mysqli,"INSERT INTO user_info (id,name,pw,st_id) VALUES ('$id','$name','$pw','$st_od')");
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