<?php
    include ('dbConnect.php');
    session_start();
    $sql = $_SESSION["resevationSQL"];
    mysqli_query($mysqli, $sql);
    mysqli_close();
    
?>