<?php
  
    //t_list 접속
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];       
    //$host = 'us-cdbr-iron-east-02.cleardb.net';
    $user = 'b0166a7ca9fa10';
    $pw = '88d08067';
    $dbName = 't_list';
    $mysqli_t = mysqli_connect($server, $user, $pw, $dbName);

    if ($mysqli_t){
      echo "MySQL 접속 성공";
      error_log("MySQL 접속 성공");
    }
    else{
      echo "MySQL 접속 실패";
      error_log("MySQL 접속 실패");
    }

?>