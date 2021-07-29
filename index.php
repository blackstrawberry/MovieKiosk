<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.1/css/jquery.mb.YTPlayer.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--css-->
    <link rel="stylesheet" href="./css/addTo.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/tool.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    
    <!-- js -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="./js/addTo.js"></script>
    

    <script type="text/javascript">
        $(function() {
            $(document).bind("fullscreenchange", function(e) {
                console.log("Full screen changed.");
                $("#status").text($(document).fullScreen() ?
                    "Full screen enabled" : "Full screen disabled");
            });
        });
    </script>

</head>

<body>
    <div class="hd" ondblclick="$(document).fullScreen(true)">
        <img class="logo" src="./img/cgv.png">
        <img class="home" src="./img/home.png" onclick="main_back();">
    </div>

        <div class="con">
            <div id="val">
                <video class="vid" muted="muted" autoplay="autoplay" loop="loop" id="mi" onclick="main_page();">
                    <source src="./video/[공익광고협의회] 굿 라이더 - 30초.mp4" type="video/mp4">
                </video>
            </div>
        </div>


    <div class="ft">

    </div>


    <script src="./js/jquery.fullscreen-min.js"></script>
    <script src="./js/jquery.fullscreen.js"></script>
    <script src="./js/warp_copy.js"></script>

</body>

</html>