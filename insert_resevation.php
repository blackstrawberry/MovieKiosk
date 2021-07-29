<?php
    ini_set('display_errors', true);
    include ('dbConnect.php');
    session_start();
    $result = mysqli_query($conn,  $_SESSION["resevationSQL"]); 
    if($result === false){ 
        echo (mysqli_error($conn));
    }else { 
        echo '성공했습니다.'; 
    }
    mysqli_close();
    
?>