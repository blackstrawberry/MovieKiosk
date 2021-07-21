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
                $(".container").load("/one_view/contents/test1.php");
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

        .btn_inner {
            position: absolute;
            left: 50%;
            top: 30%;
            transform: translateX(-50%);
        }

        .img_inner {
            position: absolute;
            left: 50%;
            top: 40%;
            transform: translateX(-50%);
        }

        .txt_inner {
            position: absolute;
            left: 50%;
            top: 60%;
            transform: translateX(-50%);
        }

        .btn_location {
            position: absolute;
            left: 87%;
            top: 90%;
        }

        .btn-right {
            text-decoration: none;
            font-family: "Malgun Gothic", "맑은 고딕", dotum, "돋움", sans-serif;
            position: relative;
            font-weight: 300;
            font-size: 20px;
            letter-spacing: -0.03em;
            display: inline-block;
            color: #fff;
            background-color: rgba(0, 121, 240);
            padding: 0.9em 2.8em 0.9em 2.25em;
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
            margin-bottom: 10%;
        }

        .footer {
            text-align: right;
            background-color: white;
            font-size: 40px;
            height: 10%;
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
</head>

<body style="background-color: black;">
    <section>
        <div class="container" ondblclick="$(document).fullScreen(true)">
        <div class="header">이 부분에 머리 들갈거임</div>
            <div class="cont">
                <h1>
                    예매예매
                </h1>
            </div>
        </div>
    </section>
</body>

</html>