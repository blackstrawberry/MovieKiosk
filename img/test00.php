<?php
    session_start();

     $conn = mysqli_connect('localhost', 'w1004mesmg', "sunmoons1s2s3!", 'w1004mesmg');
                        $query ="select title from ticket where reservation_no = 1111";
                        $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
                        $rows = mysqli_fetch_assoc($result);

                         var_dump($rows);
                     
                        //  echo $rows['id'];
                    
