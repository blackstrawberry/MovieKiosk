<?php include_once "./fragments/head.php";?>
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
    echo "----존재하는 예매번호 표시----<br>";
    $arry = array();
    while($row = mysqli_fetch_array($result)){
        echo $row['reservation_no']." ";
        $arry[] = $row['reservation_no'];
    }

    // echo "<hr>";
    // echo "arry값 디버그 : ";
    // print_r($arry);
    
    echo "<hr>"; 

    echo "입력한 예매 번호 확인: ";
    echo $reservation_no; 
    echo "<hr>";
    if(array_search($reservation_no, $arry) === false) {
        echo "예매번호 없음";
    }else{
        echo "예매확인 <br>";
        $sql = "SELECT * FROM ticket WHERE reservation_no=$reservation_no";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo $row['reservation_no']." ".$row['theater']." ".$row['price']." ".$row['title']." ".$row['seat_1']." ".$row['seat_2']." ".$row['seat_3']." ".$row['seat_4']." ".$row['people']."<br>";
    }

    mysqli_close($conn);

?>