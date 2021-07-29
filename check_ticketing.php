 <?php
   

    // error_reporting(E_ALL);
    // ini_set('display_errors', FALSE);
    session_start();

    // $host = "localhost";
    // $user = "w1004mesmg";
    // $pw = "sunmoons1s2s3!";
    // $dbName = "w1004mesmg"; // 서버에서 사용할때는 "w1004mesmg"로 해야함 
    // $conn= mysqli_connect($host, $user, $pw, $dbName); //db 연결부분

    // $host = "localhost";
    // $user = "root";
    // $pw = "1234";
    // $dbName = "test";
    // $conn= mysqli_connect($host, $user, $pw, $dbName); //db 연결부분
?>

<script   src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
<script src="./js/warp_copy.js"></script>
<script>
    $(function() {
        $("#dal").click(function() {
            $(".modal_background").fadeIn();

        });

        $(document).mouseup(function(e) {
            var container = $('.modal_background');
            if (container.has(e.target).length === 0) {
                container.css('display', 'none');
            }

        });

    });
     var g_movieNum_value1 = localStorage.getItem("local1");
     var g_movieNum_value2 = localStorage.getItem("local2");
     var g_movieNum_value3 = localStorage.getItem("local3");


    //  console.log(g_movieNum);
     document.getElementById('output1').innerHTML = g_movieNum_value1;
     document.getElementById('output2').innerHTML = g_movieNum_value2;
     document.getElementById('output3').innerHTML = g_movieNum_value3;











</script>

<style>
    .modal_background {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.8);
        display: none;
    }

    .modal_box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        width: 60%;
        height: 50%;
    }
</style>

<div id="test">
    <div id="c_t" style="background-color: white;">

        <div class="jb-wrap">
            <div class="jb-wrap img">
                <img src="./img/CINEMA1.png" class="imm">
            </div>

            <div class="jb-text" id="result">
               

                <h2>언어:<p id="output1"></p></h2><br>
                <h2>번호:<p id="output2"></p></h2><br>
                <h2>성별:<p id="output3"></p></h2><br>

                <input type="button" value="발권하기" id="dal" class="myButton">
                <input type="button" value="취소" onclick="cancel();" id="cl" class="myButton">

            </div>
        </div>
    </div>

    <div class="modal_background">

        <div class="modal_box">

            <div>
                <p>발권완료! <br>
                    스낵을 희망하시는 분은 스낵버튼을 눌러주세요. <br>
                    <a href="snak.html" onclick="snak_page();" id="sk" class="myButton" style="width: 20%;">스낵</a>
                    <a href="index.php" onclick="index_back();" id="hm" class="myButton" style="width: 20%;">사용종료</a>
                </p>
            </div>
        </div>
    </div>

    <div class="ft">

    </div>
</div>