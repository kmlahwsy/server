<?php 
  require('db.php');
  if(isset($_SESSION['userid'])){
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
  }
  else{ 
    echo "debug";
?>
<!DOCTYPE html>
<html lang=ko>
<head>
<meta charset="utf-8" />
<title>비밀번호 찾기<title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
</style>
</head>
<body>
  <div class="find">
    <form method="post" action="member_find_id.php">
      <h1>회원계정 찾기</h1>
      <p><a href="/"><input type="button" name="tohome" value="홈으로"></a></p>
        <fieldset>
          <legend>아이디 찾기</legend>
            <table>
              <tr>
                <td>이름</td>
                <td><input type="text" size="35" name="name" placeholder="이름"></td>
              </tr>
              <tr>
                <td>학번</td>
                <td><input type="number" name="st_id"></td>
              </tr>
            </table>
                <input type="submit" value="아이디 찾기" />
      </fieldset>
    </form>
  </div>
  <div class="find">
      <form method="post" action="member_find_pw.php">
        <fieldset>
          <legend>비밀번호 찾기</legend>
            <table>
              <tr>
                <td>아이디</td>
                <td><input type="text" size="35" name="userid" placeholder="아이디"></td>
              </tr>
            </table>
          <input type="submit" value="비밀번호 찾기" />
      </fieldset>
    </form>
  </div>
</body>
</html>


<?php
} 
?>