<?php
    ini_set('display_errors', true);
    include ('dbConnect.php');
    session_start();
    $sql = $_SESSION["resevationSQL"];
    mysqli_query($mysqli, $sql);
    mysqli_close();
    
?>