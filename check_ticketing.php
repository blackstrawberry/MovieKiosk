<?php
session_start();
?>
<script src="./js/warp_copy.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>

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
        height: 80%;
        background-image: url("./img/234.png");
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>


<div id="test">
    <div id="c_t" style="background-color: white;">

        <div class="jb-wrap">
            <div class="jb-wrap img">
                <img src="./img/CINEMA1.png" class="imm">
            </div>

            <div class="jb-text">

                <h2>영화:<p id="output1"></p> </h2><br>
                <h2>상영관:<p id="output2"></p></h2><br>
                <h2>상영시간:<p id="output3"></p></h2><br>

                <input type="button" value="발권하기" id="dal" class="myButton">
                <input type="button" value="취소" onclick="cancel();" id="cl" class="myButton">

            </div>
        </div>
    </div>
    

    <div class="modal_background">

        <div class="modal_box">

                    <div  style="padding-top: 10%; padding-left: 5%;">
                    <p><span style="font-size: 30px; color:black;">발권완료!</span> <br>
                    스낵을 희망하시는 분은 스낵버튼을 눌러주세요. <br>
                    <a href="snak.html" onclick="snak_page();" id="sk" class="myButton" style="width: 30%;">스낵</a>
                    <a href="index.php" onclick="index_back();" id="inx" class="myButton" style="width: 30%;">사용종료</a>
                </p>
            </div>
        </div>
    </div>

    <div class="ft">

    </div>
</div>