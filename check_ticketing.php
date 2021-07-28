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

                <h2>영화: </h2><br>
                <h2>상영관:</h2><br>
                <h2>상영시간:</h2><br>

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