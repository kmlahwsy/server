<?php
    //정해진 택배 입력하는 사람(관리자)이 맞는지 확인하는 부분
    session_start();
    $id=$_POST['id'];
    $pw=$_POST['pw'];

    require('db.php');
    
    $check="SELECT * FROM user_info WHERE id='$id'";
    $result=$mysqli->query($check); 

    if($result->num_rows==1)
    {
         //id에 correspond하는 하나의 열을 배열로 가져오기
        $row=$result->fetch_array(MYSQLI_ASSOC);
        if($pw == $row['pw'])
        {
            if($row['role_b']=='admin') {
                $name = $row['name'];
                //비밀번호 확인됐으면 세션 변수 만들기
                $_SESSION['id']=$id;
                $_SESSION['name']=$name;
            
                //세션 변수에 등록 잘 됐는지 확인
                if(isset($_SESSION['id'])) {
                    //로그인 성공 시 페이지 이동
                    header('Location: ./bballae.html');   
                    exit();
                }
            }
        }
    }
?>
<script type="text/javascript">
    alert('빨래통리스트 관리자가 아니므로 접근할 수 없습니다.');
    <?php 
        unset($_POST);
    ?>
    window.location = 'bballae_admin_check.php';
</script>
