<?php
    
    require('db.php');
?>
<meta charset="utf-8" />
<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['pw'];
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