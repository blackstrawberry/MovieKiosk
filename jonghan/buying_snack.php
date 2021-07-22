<?php
    session_start();
?>

<script src="https://code.jquery.com/jquery-latest.js"></script>
<style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
    
        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 30%; /* Could be more or less, depending on screen size */                          
        }
 
</style>

<?php

    $host = "localhost";
    $user = "root";
    $pw = "1234";
    $dbName = "movie_kiosk"; // 서버에서 사용할때는 "w1004mesmg"로 해야함 
    $conn= mysqli_connect($host, $user, $pw, $dbName); //db 연결부분

?>
<html>
    <body>
        <h1>스낵</h1>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            
            <!-- Modal content -->
            <div class="modal-content">
                    <p style="text-align: center;"><span style="font-size: 14pt;"><b><span style="font-size: 24pt;">공지</span></b></span></p>
                    <p style="text-align: center; line-height: 1.5;"><br />여기에 내용</p>
                    <p><br /></p>
                <div style="cursor:pointer;background-color:#DDDDDD;text-align: center;padding-bottom: 10px;padding-top: 10px;" onClick="close_pop();">
                    <span class="pop_bt" style="font-size: 13pt;" >
                            닫기
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
      
            jQuery(document).ready(function() {
                    $('#myModal').show();
            });
            //팝업 Close 기능
            function close_pop(flag) {
                $('#myModal').hide();
            };
            
        </script>
    </body>
</html>
<?php
    // 스낵 리스트 불러오기, 배열 만들기
    $food = array();
    $basket = array();
    $sql = "SELECT * FROM food";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        // echo $row['menu']." ".$row['price']."<br>";
        $food[$row['menu']] = $row['price'];
    }

    // var_dump($food);
    // echo "<br>";
    // echo $food['스몰세트'];


    echo "<h2>메뉴</h2>";

    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        echo $row['menu']." ".$row['price'];
        echo "<button>선택</button><br>";
    }



    echo "<hr>";
    echo "장바구니<br>";
    

    ?>


