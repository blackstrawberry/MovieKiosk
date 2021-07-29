<?php
    session_start();
    $host = "localhost";
    $user = "w1004mesmg";
    $pw = "sunmoons1s2s3!";
    $dbName = "w1004mesmg"; // 서버에서 사용할때는 "w1004mesmg"로 해야함 
    $_SESSION["conn"] = mysqli_connect($host, $user, $pw, $dbName); //db 연결부분

?>

<div class="jb-wrap" style="background-color: white;">
    <div class="jb-wrap img">
        <img src="./img/CINEMA1.png" id="imgg" class="imm">
    </div>

    <form id="check_num" method="post" action="modal.php">
        <div class="jb-text">
            <h1>예매번호를 입력해 주세요</h1><br>
            <input class="jb-input" type="text" name="c_num" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="4"><br>
            <input style="margin-top: 2%;" class="myButton" type="submit" name="submit" onclick="check_page();" id="ck">확인</input>
            <?php
                function inputNum(){
                    $_SESSION["ticket"] = $_POST['c_num'];
                    echo '<script>';
                    echo 'console.log('.$_SESSION["ticket"].');';
                    echo '</script>';
                }
                if(array_key_exists('c_num',$_POST)){
                    inputNum();
                }
            ?>
        </div>
    </form>
</div>
    </div>
    </div>

