<?php
include ('dbConnect.php');
    $resevationNum = mt_rand(111111, 999999)
    $resevationInfo = explode(",",($_GET["allary"]));

    session_start();
    $_SESSION["resevationNum"] = $resevationNum;        // 예약 넘버
    $_SESSION["resevationPlace"] = $resevationInfo[0];  // 예약 장소 2D
    $_SESSION["resevationDate"] = $resevationInfo[1];   // 예약 날짜 
    $_SESSION["resevationTime"] = $resevationInfo[2];   // 예약 시간
    $_SESSION["resevationMoiveName"] = $resevationInfo[3]; // 예약 영화이름
    $_SESSION["resevationPersonnel"] = $resevationInfo[4]; // 예약 인원 

    // 예약 좌석 SESSION 에다가 저장
    $sizeofReservation = $resevationInfo[4];
    if($sizeofReservation = 1){
        $_SESSION["resevationPeople_1"] = $resevationInfo[5];
        $_SESSION["resevationSQL"]  = "INSERT INTO tiket (reservation_no, theater, price, title, seat_1) VALUES ($_SESSION["resevationNum"], $_SESSION["resevationPlace"], 6000 , $_SESSION["resevationMoiveName"] , $_SESSION["resevationPeople_1"] )";
        
    }else if($sizeofReservation = 2){
        $_SESSION["resevationPeople_1"] = $resevationInfo[5]; 
        $_SESSION["resevationPeople_2"] = $resevationInfo[6];  
        $_SESSION["resevationSQL"]  = "INSERT INTO tiket (reservation_no, theater, price, title, seat_1) VALUES ($_SESSION["resevationNum"], $_SESSION["resevationPlace"], 6000 , $_SESSION["resevationMoiveName"] , $_SESSION["resevationPeople_1"], $_SESSION["resevationPeople_2"] )";
    }
    else if($sizeofReservation = 3){
        $_SESSION["resevationPeople_1"] = $resevationInfo[5];  
        $_SESSION["resevationPeople_2"] = $resevationInfo[6]; 
        $_SESSION["resevationPeople_3"] = $resevationInfo[7]; 
        $_SESSION["resevationSQL"]  = "INSERT INTO tiket (reservation_no, theater, price, title, seat_1) VALUES ($_SESSION["resevationNum"], $_SESSION["resevationPlace"], 6000 , $_SESSION["resevationMoiveName"] , $_SESSION["resevationPeople_1"], $_SESSION["resevationPeople_2"], $_SESSION["resevationPeople_3"] )";
    }else if($sizeofReservation = 4){
        $_SESSION["resevationPeople_1"] = $resevationInfo[5]; 
        $_SESSION["resevationPeople_2"] = $resevationInfo[6];  
        $_SESSION["resevationPeople_3"] = $resevationInfo[7]; 
        $_SESSION["resevationPeople_4"] = $resevationInfo[8]; 
        $_SESSION["resevationSQL"]  = "INSERT INTO tiket (reservation_no, theater, price, title, seat_1) VALUES ($_SESSION["resevationNum"], $_SESSION["resevationPlace"], 6000 , $_SESSION["resevationMoiveName"] , $_SESSION["resevationPeople_1"], $_SESSION["resevationPeople_2"], $_SESSION["resevationPeople_3"], $_SESSION["resevationPeople_4"] )";
    }


?>
