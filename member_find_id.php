<?php

echo "미완성 파일";
// THIS FILE IS NOT USED

/*
require('db.php');
if($_POST["name"] == "" || $_POST["st_id"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
}
else{
	$name = $_POST['name'];
    $st_id = $_POST['st_id'];
    
$sql = mq("select * from member where name = '{$name}' && st_id = '{$st_id}'");
$result = $sql->fetch_array();

if($result["name"] == $name){
	echo "<script>alert('회원님의 ID는 ".$result['id']."입니다.'); history.back();</script>";
}else{
echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
}
*/
?>