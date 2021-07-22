<?php
    error_reporting(E_ALL);
    ini_set('display_errors', FALSE);

    $host = "localhost";
    $user = "root";
    $pw = "1234";
    $dbName = "movie_kiosk"; // 서버에서 사용할때는 "w1004mesmg"로 해야함 
    $conn= mysqli_connect($host, $user, $pw, $dbName); //db 연결부분

    ?>
<html>
    <form method="POST" action="reservation_check.php">
        예매번호입력: <input type="text" name="reservation_no"/><br/>
        <input type="submit" name="submit"/>
    </form>
    <hr>
</html>
<?php
    $reservation_no = $_POST['reservation_no'];
    $sql = "SELECT reservation_no FROM ticket";
    $result = mysqli_query($conn, $sql);
    echo "----존재하는 예매번호 표시----";
    $arry = array();
    while($row = mysqli_fetch_array($result)){
        echo $row['reservation_no']."<br>";
        $arry[] = $row['reservation_no'];
    }

    // echo "<hr>";
    // echo "arry값 디버그 : ";
    // print_r($arry);
    
    echo "<hr>"; 

    echo "입력한 예매 번호 확인: ";
    echo $reservation_no; 
    echo "<hr>";
    if(array_search($reservation_no, $arry) === false ||array_search($reservation_no, $arry) === 0){
        echo "예매번호 없음";
    }else{
        echo "예매확인 <br>";
        $sql = "SELECT * FROM ticket WHERE reservation_no=$reservation_no";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo $row['reservation_no']." ".$row['theater']." ".$row['price']." ".$row['title']." ".$row['seat']." ".$row['people']."<br>";
    }

    mysqli_close($conn);

?>