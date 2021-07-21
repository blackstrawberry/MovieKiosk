<html>

<head>
    <meta content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="/one_view/js/jquery.fullscreen-min.js"></script>
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
        //틀은 index이며, 입력된 div안의 곳만 url의 내용을 받는거임. 
        function next_page() {
            $(function() {
                $(".container").load("/one_view_woo/contents/test1.php");
            });
        }

        function next_page2() {
            $(function() {
                $(".container").load("/one_view_woo/tete.php");
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

        .arrow-right {
            position: absolute;
            display: inline-block;
            width: 0;
            height: 0;
            border-top: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 8px solid transparent;
            border-left: 8px solid white;
            margin-top: 8px;
            margin-left: 9px;
            animation: horizontal 0.7s ease-in-out infinite;
        }

        .cont {

            color: red;
            border-radius: solid 1px blue;
            text-align: center;
        }

        .header {
            text-align: center;
            background-color: white;
            font-size: 40px;
            height: 10%;
            margin: auto;
        }

        .footer {
            text-align: center;
            background-color: white;
            font-size: 40px;
            height: 10%;
            margin: auto;
        }

        .modal {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            top: 0;
            left: 0;
            display: none;
        }

        .modal_content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 25%;    
        }

        .img {
            width: 30%;
            height: 30%;
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
</head>

<body style="background-color: gray;">
    <section>
        <div class="container" ondblclick="$(document).fullScreen(true)">
            <div class="header">이 부분에 광고 영상</div>
            
            <div class="img">
                <table>
                    <th>
                        <figure style="text-align: center;"><img src="./img/pngegg.png" onclick="next_page();"><br>예매</figure>
                    </th>
                    <th>
                        <figure style="text-align: center;"><img src="./img/pngegg.png" style="margin-left: 20%;" onclick="next_page2();"><br>발권</figure>
                    </th>
                </table>    
            </div>

            </div>
        </div>
    </section>
    <footer class="footer">
        여기에 포스터 광고
    </footer>
</body>

</html>