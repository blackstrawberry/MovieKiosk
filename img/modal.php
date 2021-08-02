<div class="jb-wrap" style="background-color: white;">
    <div class="jb-wrap img">
        <img src="./img/CINEMA1.png" class="imm">
    </div>

    <form id="check_num" method="post" action="test.php">
        <div class="jb-text">
            <h1>예매번호를 입력해 주세요</h1><br>
            <input class="jb-input" type="text" name="c_num" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" 
                   maxlength="6" style="text-align: center;"><br>
            
            <input style="margin-top: 2%;" class="myButton" type="submit" onclick="check_page();" id="ck" value="확인">
        </div>
    </form>
</div>