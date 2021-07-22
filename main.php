
    <!-- <meta content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/css/jquery.mb.YTPlayer.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js"></script>
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="/one_view_woo/js/jquery.fullscreen-min.js"></script> -->
    <script type="text/javascript">
        
        $(function() {
            $(document).bind("fullscreenchange", function(e) {
                console.log("Full screen changed.");
                $("#status").text($(document).fullScreen() ?
                    "Full screen enabled" : "Full screen disabled");
            });
        });
    </script>

    <script>
        // 틀은 index이며, 입력된 div안의 곳만 url의 내용을 받는거임. 
        function next_page() {
            $(function() {
                $(".section").load("/one_view_woo/contents/test1.php");
            });
            // location.href="tete.php";
        }

        function next_page2() {
            $(function() {
                $("#bal").load("./hakken.php");
            });
        }
    </script>


    <style>
        body {
            margin: 0;
        }

        .container {
            width: 100vw;
            height: 100vh;
        }

        .footer {
            text-align: center;
            background-color: black;
            font-size: 40px;
            height: 120px;
            margin: auto;
            color: white;
        }

        .img {
            width: 30%;
            height: 30%;
            text-align: center;
            margin-top: 10%;
            margin-left: 7.5%;
        }

        #background {
             z-index: -1;
            }   
        
        .text {
            font-size: 30px;
            text-align: center;
        }
        @keyframes horizontal {
            0% {
                margin-left: 9px;
            }

            50% {
                margin-left: 11px;
            }

            100% {
                margin-left: 9px;
            }
        }
    </style>

    <script>
        $(function() {
            $("img").click(function() {
                $(".modal").fadeIn();
            });

            $(document).mouseup(function(e) {
                var container = $('.modal');
                if (container.has(e.target).length === 0) {
                    container.css('display', 'none');
                }

            });

        });
    </script>



        <div id="bal" class="container">
            <div class="img">
                <table>
                    <th>
                        <figure class="text"><img src="./img/pngegg.png" onclick="next_page();"><br>예매</figure>
                    </th>
                    <th>
                        <figure class="text"><img src="./img/pngegg.png" style="margin-left: 20%;" onclick="next_page2();"><br>발권</figure>
                    </th>
                </table>    
            </div>  
        </div>


