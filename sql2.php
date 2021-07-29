<?php
    session_start();
$movie_num = $_POST['num2'];

     $conn = mysqli_connect('localhost', 'root', "1234", 'test');
                        $query ="select pw from sorena where pw = $movie_num";
                        $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
                        $rows = mysqli_fetch_assoc($result);

                         
                     
                         echo $rows['pw'];
                    

                      