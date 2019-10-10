<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    오늘 나온 택배!
    </head>

</html>
<?php
    $check="SELECT * FROM t_list";
    $result=$mysqli->query($check); 
    while($newrow = mysqli_fetch_array( $result ) )
      {
          $tname = $newrow['name'];
          $tno =  $newrow['no'];
          echo "$tname ($tno)";
          echo "<br>";
      }
?>