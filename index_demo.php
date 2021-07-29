<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="http://example.com/myicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.1/css/jquery.mb.YTPlayer.min.css">
    <meta content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

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
                $("#qwe").load("./main.php");
            });
        }
    </script>


    <style>
        body {
            margin: 0;
        }

        .con {
            width: 100vw;
            height: 100vh;
            text-align: center;
        }

        .aa {
            text-align: center;
            background-color: black;
            font-size: 40px;
            height: 150px;
            width: auto;

        }

        .test {
            width: 100%;
        }

        .vid {
            /* margin-bottom: 3%; */
            text-align: center;
        }

        .logo {
            width: 128px;
            height: 128px;
            float: left;
            margin-left: 10%;
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

<body>
    <div class="aa" ondblclick="$(document).fullScreen(true)">
        <img class="logo" src="./img/cgv.png">
    </div>

    <div id="qwe">
        <div id="zzz" style="background-color: black;">
            <div id="zzz">
                <div class="con" id="val">
                    <video class="vid" muted="muted" autoplay="autoplay" loop="loop" onclick="next_page();">
                        <source src="./video/mugen.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="aa">
        
    </div>
</body>

</html>


<!--css 연결-->
<script src="./js/jquery.fullscreen.js"></script>
<script src="./js/jquery.fullscreen-min.js"></script>