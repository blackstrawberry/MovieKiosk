<?php
    session_start();
$movie_num = $_POST['num2'];

$conn = mysqli_connect('localhost', 'w1004mesmg', "sunmoons1s2s3!", 'w1004mesmg');
$query ="select theater from ticket where reservation_no = $movie_num";
$result = mysqli_query($conn, $query)or die(mysqli_error($conn));
$rows = mysqli_fetch_assoc($result);

                         
                     
                         echo $rows['theater'];
                    

                      