<?php

    $resevationNum = mt_rand(111111, 999999)
    $resevationInfo = explode(",",($_GET["allary"]));


    echo '<script>'; 
    echo 'alert("isMobile : '.$resevationInfo[0].'");'; 
    echo '</script>';


    session_start();
    $_SESSION["resevationNum"] = $resevationNum;        // 예약 넘버
    $_SESSION["resevationPlace"] = $resevationInfo[0];  // 예약 장소 2D
    $_SESSION["resevationDate"] = $resevationInfo[1];   // 예약 날짜 
    $_SESSION["resevationTime"] = $resevationInfo[2];   // 예약 시간
    $_SESSION["resevationMoiveName"] = $resevationInfo[3]; // 예약 영화이름
    $_SESSION["resevationPersonnel"] = $resevationInfo[4]; // 예약 인원 


    $num = $resevationNum;
    $place = $resevationInfo[0];
    $date = $resevationInfo[1];
    $time = $resevationInfo[2];
    $movieName = $resevationInfo[3];
    $personnel = $resevationInfo[4];

    // 예약 좌석 SESSION 에다가 저장
    $sizeofReservation = $resevationInfo[4];
    if($sizeofReservation = 1){
        $_SESSION["resevationPeople_1"] = $resevationInfo[5];
        $people_1 = $resevationInfo[5];
        $_SESSION["resevationSQL"]  = "INSERT INTO ticket (reservation_no, theater, price, , 'time', title, seat_1, people) VALUES ($num, $place, 6000, $time, $movieName, $people_1, $personnel)";
        
    }else if($sizeofReservation = 2){
        $_SESSION["resevationPeople_1"] = $resevationInfo[5]; 
        $_SESSION["resevationPeople_2"] = $resevationInfo[6];  
        $people_1 = $resevationInfo[5];
        $people_2 = $resevationInfo[6];
        $_SESSION["resevationSQL"]  = "INSERT INTO ticket (reservation_no, theater, price, 'time', title, seat_1,seat_2, people) VALUES ($num, $place, 12000, $time, $movieName, $people_1, $people_2, $personnel)";
    }
    else if($sizeofReservation = 3){
        $_SESSION["resevationPeople_1"] = $resevationInfo[5];  
        $_SESSION["resevationPeople_2"] = $resevationInfo[6]; 
        $_SESSION["resevationPeople_3"] = $resevationInfo[7];
        $people_1 = $resevationInfo[5];
        $people_2 = $resevationInfo[6]; 
        $people_3 = $resevationInfo[7]; 
        $_SESSION["resevationSQL"]  = "INSERT INTO ticket (reservation_no, theater, price, 'time', title, seat_1,seat_2,seat_3, people) VALUES ($num, $place, 18000, $time, $movieName, $people_1, $people_2,$people_3, $personnel)";
    }else if($sizeofReservation = 4){
        $_SESSION["resevationPeople_1"] = $resevationInfo[5]; 
        $_SESSION["resevationPeople_2"] = $resevationInfo[6];  
        $_SESSION["resevationPeople_3"] = $resevationInfo[7]; 
        $_SESSION["resevationPeople_4"] = $resevationInfo[8];
        $people_1 = $resevationInfo[5];
        $people_2 = $resevationInfo[6]; 
        $people_3 = $resevationInfo[7];  
        $people_4 = $resevationInfo[8];  
        $_SESSION["resevationSQL"]  = "INSERT INTO ticket (reservation_no, theater, price, 'time', title, seat_1,seat_2,seat_3,seat_4, people) VALUES ($num, $place, 24000, $time, $movieName, $people_1, $people_2,$people_3,$people_4, $personnel)";
    }


?>
