<?php


$conn = mysqli_connect('localhost', 'root', "1234", 'test');
$query ="select* from sorena where pw = 3333";
$result = mysqli_query($conn, $query)or die(mysqli_error($conn));
    $rows = mysqli_fetch_assoc($result);


    var_dump($rows['number']);



?>
