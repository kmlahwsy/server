<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>로그인 예제</title>
    </head>

    <body>
            <h2>빨래통, 택배 찾기!!<h2>
            <?php
				session_start();

				if(!isset($_SESSION['id']) || !isset($_SESSION['name']))
				{
					echo "<meta http-equiv='refresh' content='0;url=login.html'>";
					exit;
				}
				$id = $_SESSION['id'];
				$name = $_SESSION['name'];

				echo "<p>안녕하세요. $name ($id)님</p>";

			?>

			<a href="taekbae.html">
				<input type="button" name="taekbaebutton" value="택배 리스트 입력하러 가기">
			</a>
			<br />
			<a href="bballae.html">
				<input type="button" name="bballaebutton" value="빨래통 리스트 입력하러 가기">
			</a>
			
			<?php
				echo "<p><a href='logout.php'>로그아웃</a></p>"
			?>

			<br />
        	<a href="signup.html">
				<input type="button" name="signupbtn" value="회원가입 하러가기">
			</a>
			<br />
			<a href="find_pw.php">
				<input type="button" name="findpwbtn" value="비밀번호 찾으러가기">
			</a>
    </body>

</html> 