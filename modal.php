<div class="jb-wrap" style="background-color: white;">
    <div class="jb-wrap img">
        <img src="./img/CINEMA1.png" id="imgg" class="imm">
    </div>

    <form id="check_num" method="get">
        <div class="jb-text">
            <h1>예매번호를 입력해 주세요</h1><br>
            <input class="jb-input" type="text" name="c_num" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="4"><br>
            <button style="margin-top: 2%;" class="myButton" type="button" onclick="check_page();" id="ck">확인</button>
        </div>
    </form>
</div>