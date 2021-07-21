<html>

<head>


    <!--영상 오류 방지용-->
    <link rel="icon" type="image/png" href="http://example.com/myicon.png">
    
    <meta content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.1/css/jquery.mb.YTPlayer.min.css">
    <script src="inc/jquery.mb.YTPlayer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js"></script>
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/one_view_woo/js/jquery.fullscreen-min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(document).bind("fullscreenchange", function(e) {
                console.log("Full screen changed.");
                $("#status").text($(document).fullScreen() ?
                    "Full screen enabled" : "Full screen disabled");
            });
        });
        // jQuery( function() {
        // jQuery(".bg").YTPlayer();
        //  } );
    </script>

    <script>
        // 틀은 index이며, 입력된 div안의 곳만 url의 내용을 받는거임. 
        function next_page() {
            $(function() {
                $(".container").load("/one_view_woo/contents/test1.php");
            });
        }
        function next_page2() {
            $(function() {
                $(".container").load("./one_view_woo/tete.php");
            });
        }
    </script>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100vw;
            height: 100vh;
        }

        .ad {
            text-align: center;
            background-color: white;
            font-size: 40px;
            height: 250px;
            /* margin: auto; */
            width: 101.5%;
            

        }

        .footer {
            text-align: center;
            background-color: white;
            font-size: 40px;
            height: 10%;
            margin: auto;
            width: 101.5%;
        }

        .bg {
            /* width: 100%;
            height: 400px; */
            overflow: hidden;
            margin: 0px auto;
            position: relative;
        }

        /* video{
            height: 400px;
        } */
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

<body style="background-color: gray;" ondblclick="$(document).fullScreen(true)">
    <div class="ad" ondblclick="$(document).fullScreen(true)">
    </div>
    <section>
        <div class="container">
                    <div class="bg">
                        <video muted autoplay loop onclick="next_page();">
                            <source src="//bit.ly/3kYMF9A" type="video/mp4">
                        </video>
                    </div>
            </div>
    </section>

</body>

</html>
