<?php include_once "./dbconnect.php";?>
<html>
    <form method="POST" action="sqlconnet_test.php">
        예매번호: <input type="text" name="reservation_no"/><br/>
        상영관: <input type="text" name="theater"/><br/>
        가격: <input type="text" name="price"/><br/>
        영화제목: <input type="text" name="title"/><br/>
        좌석: <input type="text" name="seat"/><br/>
        인원수: <input type="text" name="people"/><br/>
        <input type="submit" name="submit"/>
    </form>
</html>
<?php
    $reservation_no = $_POST['reservation_no'];
    $theater = $_POST['theater'];
    $price = $_POST['price'];
    $title = $_POST['title'];
    $seat = $_POST['seat'];
    $people = $_POST['people'];

    $sql = "INSERT INTO ticket (reservation_no, theater, price, title, seat, people) VALUES('$reservation_no', '$theater', '$price', '$title', '$seat', '$people')";
    $result = mysqli_query($conn, $sql);
 	
    if($result) { echo "insert success!<br>"; }
    else { echo "failure<br>"; }
    
    /* SELECT 예제 */
    $sql = "SELECT * FROM ticket";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        echo $row['reservation_no']." ".$row['theater']." ".$row['price']." ".$row['title']." ".$row['seat']." ".$row['people']."<br>";
    }

    mysqli_close($conn);

?>