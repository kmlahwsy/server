<?php 
    const PASSWORD_COST = ['cost'=>12];// cost 의 기본 값은 10,시간이 조금 더 걸려도 좀 더 강력하게 보안 가능하게 cost 값 10으로
    // 암호화
    $pw = password_hash($password , PASSWORD_DEFAULT, PASSWORD_COST);
    // 패스워드 검증
    if ( !password_verify($password ,$pw) ) {
        throw new Exception('비밀번호가 일치하지 않습니다.');
    }
?>
    