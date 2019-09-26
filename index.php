<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>빨래통, 택배 찾기</title>
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
				
				//name 변수의 charset 확인하기
				$charset_name = mb_detect_encoding($_SESSION['name'], "EUC-KR, UTF-8, ASCII");
				//name 변수 unicode 인코딩
				$name= iconv($charset_name, "UTF-8", $_SESSION['name']);
				
				echo "<p>안녕하세요. $name ($id)님</p>";

			?>

			<?php //택배 리스트 입력하는 버튼 (이름과 택배 번호) --> taekbae.html와 연결 ?>
			<a href="taekbae.html">
				<input type="button" name="taekbaebutton" value="택배 리스트 입력하러 가기">
			</a>
			<br />

			<?php //빨래 리스트 입력하는 버튼 (학번) --> bballae.html와 연결 ?>
			<a href="bballae.html">
				<input type="button" name="bballaebutton" value="빨래통 리스트 입력하러 가기">
			</a>
			
			<?php
				//로그아웃하는 버튼 --> logout.php와 연결
				echo "<p><a href='logout.php'>로그아웃</a></p>"
			?>
			<br />

			<?php //회원가입하러 가는 버튼 --> signup.html와 연결 ?>
        	<a href="signup.html">
				<input type="button" name="signupbtn" value="회원가입 하러가기">
			</a>
			<br />
			
			<?php //비밀번호 찾으러 가는 버튼 --> find_pw.php와 연결 ?>
			<a href="find_pw.php">
				<input type="button" name="findpwbtn" value="비밀번호 찾으러가기">
			</a>
    </body>

</html> 