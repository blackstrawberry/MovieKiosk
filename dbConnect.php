<?php
    // 서버에서 사용하는 변수
    $host = 'localhost';
    $user = 'w1004mesmg';
    $pw = 'sunmoons1s2s3!';
    $dbName = 'w1004mesmg';
    $conn= mysqli_connect($host, $user, $pw, $dbName);
   
    if($conn){
        echo "connect : 성공<br>";
    }
    else{
        echo "disconnect : 실패<br>";
    }
     

?>