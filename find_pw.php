<?php 
  require('db.php');
  if(isset($_SESSION['userid']))
  {
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    exit;
  }
?>
<!DOCTYPE html>
<html lang=ko>

      <head>
      <meta charset="utf-8">
      <title>비밀번호 찾기</title>
        <!--
      <style>
      * {margin: 0 auto;}
      a {color:#333; text-decoration: none;}
      .find {text-align:center; width:500px; margin-top:30px; }
      </style>
      -->
      </head>

      <body>
        <form method="post" action="member_find_pw.php">

              비밀번호 찾기
                  <table>
                    <tr>
                      <td>아이디</td>
                      <td><input type="text" size="35" name="userid" placeholder="아이디"></td>
                    </tr>
                  </table>
                <input type="submit" value="비밀번호 찾기" />

          </form>
        </div>
      </body>
</html>

