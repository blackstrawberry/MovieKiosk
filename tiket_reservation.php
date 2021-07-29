<?php
include ('dbConnect.php');
header('Content-Type: text/html; charset=utf-8');
@ini_set('display_error', 'On');
@ini_get('include_path');
@error_reporting(E_ALL^E_WARNING^E_NOTICE);
    function raw_json_encode($input) {
        
        return preg_replace_callback(
            '/\\\\u([0-9a-zA-Z]{4})/',
            function ($matches) {
                return mb_convert_encoding(pack('H*',$matches[1]),'UTF-8','UTF-16');
            },
            json_encode($input)
        );
        
    }
    
    // 단순 배열
    $arr  = $_REQUEST['arr_']; // $arr[0] == "woohyeon"
    
    // json 객체
    $json = $_REQUEST['json_'];
    $json = json_decode($json); // $json->gender == "male"
    
    // json 객체 반환
    //echo raw_json_encode($json); 
    $resevationNum = mt_rand(111111, 999999);
    session_start();
    $_SESSION["resevationNum"] = $resevationNum;        // 예약 넘버
    $_SESSION["resevationPlace"] = $json->place;  // 예약 장소 2D
    $_SESSION["resevationDate"] = $json->date;   // 예약 날짜 
    $_SESSION["resevationTime"] = $json->time;   // 예약 시간
    $_SESSION["resevationMoiveName"] = $json->movieName; // 예약 영화이름
    $_SESSION["resevationPersonnel"] = $json->personnel; // 예약 인원 
    
    
    $num = $resevationNum;
    $place =  $json->place;
    $date = $json->date;
    $time = $json->time;
    $movieName = $json->movieName;
    $personnel = $json->personnel;
    
    //예약 좌석 SESSION 에다가 저장
    $sizeofReservation = $personnel;
    if($sizeofReservation == 1){
        $_SESSION["resevationPeople_1"] = $json->seat_1;
        $people_1 = $json->seat_1;
        $_SESSION["resevationSQL"]  = "INSERT INTO ticket (reservation_no, theater, price, time, title, seat_1, people) 
                                        VALUES ('$num', '$place', '6000', '$time', '$movieName', '$people_1', '$personnel');";
    
    }else if($sizeofReservation == 2){
            $_SESSION["resevationPeople_1"] = $json->seat_1;
            $_SESSION["resevationPeople_2"] = $json->seat_2;  
        $people_1 = $json->seat_1;
        $people_2 = $json->seat_2;
        $_SESSION["resevationSQL"]  = "INSERT INTO ticket (reservation_no, theater, price, time, title, seat_1,seat_2, people) 
                                       VALUES ('$num', '$place', '12000', '$time', '$movieName', '$people_1', '$people_2', '$personnel');";
    }
    else if($sizeofReservation == 3){
        $_SESSION["resevationPeople_1"] = $json->seat_1; 
        $_SESSION["resevationPeople_2"] = $json->seat_2;
        $_SESSION["resevationPeople_3"] = $json->seat_3;
        $people_1 = $json->seat_1;
        $people_2 = $json->seat_2; 
        $people_3 = $json->seat_3;
        $_SESSION["resevationSQL"]  = "INSERT INTO ticket (reservation_no, theater, price, time, title, seat_1, seat_2, seat_3, people) 
                                    VALUES ('$num', '$place', '18000', '$time', '$movieName', '$people_1', '$people_2','$people_3', '$personnel');";
    }else if($sizeofReservation == 4){
        $_SESSION["resevationPeople_1"] = $json->seat_1;
        $_SESSION["resevationPeople_2"] = $json->seat_2;  
        $_SESSION["resevationPeople_3"] = $json->seat_3; 
        $_SESSION["resevationPeople_4"] = $json->seat_4;
        $people_1 = $json->seat_1;
        $people_2 = $json->seat_2; 
        $people_3 = $json->seat_3;  
        $people_4 = $json->seat_4;  
        $_SESSION["resevationSQL"]  = "INSERT INTO ticket (reservation_no, theater, price, time, title, seat_1, seat_2, seat_3, seat_4, people) 
                                       VALUES ('$num', '$place', '24000', '$time', '$movieName', '$people_1', '$people_2','$people_3','$people_4', '$personnel');";
    }

    $result = mysqli_query($conn,  $_SESSION["resevationSQL"]); 
    if($result === false){ 
        echo (mysqli_error($conn));
    }else { 
        echo '성공했습니다.'; 
    }

   
    ?>