<?php
  
  //t_list 에 접속하기 위한 셋업
  //$mysqli=mysqli_connect("us-cdbr-iron-east-02.cleardb.net", "b0166a7ca9fa10", "88d08067", "t_list");
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $server = $url["host"];
  $serverusername = $url["user"];
  $serverpassword = $url["pass"];
  $db = substr($url["path"], 1);
  $mysqli=mysqli_connect($server, $serverusername, $serverpassword, $db);

?>