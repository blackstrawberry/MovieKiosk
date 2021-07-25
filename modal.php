    <script>
        $(function() {
            $("#imgg").click(function() {
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

    <div id="page2">
        <div>
            <img src="./img/popcorn.png" id="imgg" class="imm">
        </div>
        <div style="text-align: center;">
            
            <p>여기다가 그냥 예매번호 확인 버튼 주기?? 지금은 팝콘이 버튼인데 머주죠;</p>
            
        </div>
        <div class="modal_background">

            <div class="modal_box">

                <div class="mb-3 container">
                    <!--폼-->
                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="예매번호를 입력해주세요" maxlength="4" name="t_num" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" />

                        <input type="button" value="입력" class="btn btn-light" style="margin-top: 3%;" onclick="check_page();">
                        <!---->
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
