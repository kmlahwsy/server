<?php
    
    require('db.php');

    $id = $_GET['id'];
    $name = $_GET['name'];
    $password = $_POST['pw'];
    $st_id = $_POST['st_id'];
 
    const PASSWORD_COST = ['cost'=>12];// cost 의 기본 값은 10,시간이 조금 더 걸려도 좀 더 강력하게 보안 가능하게 cost 값 10으로
    /* 암호화 */
    $pw = password_hash($password , PASSWORD_DEFAULT, PASSWORD_COST);
    /* 패스워드 검증 */
    if ( !password_verify($password ,$pw) ) {
        throw new Exception('비밀번호가 일치하지 않습니다.');
    }


    $check="SELECT *from user_info WHERE userid='$id'";
    
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
        echo "<button onclick=\"location.href='signup.html'\"> 회원가입 실패, 돌아가기 </button>";
?>