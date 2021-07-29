<!DOCTYPE HTML>

<html>
	<head>
		<title>Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./css/main.css" />

	  <link rel="stylesheet" href="./css/modalcopy.css" />
	  <link rel="stylesheet" href="./css/modal.css" /> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    

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
	<div class="hd">
        <img class="logo" src="./img/cgv.png">
        <img class="home" src="./img/home.png" id="mb2" onclick="main_back2();">
    </div>
	<div id="pad" style="padding-top: 6%;"></div>
	<div id="ONE" style="text-align: center;">
				 			<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="./images/보스 베이비2.jpg" alt="보스 베이비2"/>
									</span>
									<a onclick="next_page1();">
										<h2>보스 베이비2</h2>
										<div class="content">
											<p>애니매이션 (전체이용가)</p>
										</div>
									</a>
								</article>

								<article class="style2">
									<span class="image">
										<img src="./images/블랙 위도우.jpg" alt="블랙 위도우" />
									</span>
									<a onclick="next_page2();">
										<h2>블랙 위도우</h2>
										<div class="content">
											<p>액션, 어드밴쳐 (12세).</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="./images/귀멸의칼날 무한열차.jpg" alt="귀멸의칼날 무한열차" />
									</span>
									<a onclick="next_page3();">
										<h2>귀멸의칼날 무한열차</h2>
										<div class="content">
											<p>애니매이션 (15세)</p>
										</div>
									</a>
								</article>
								<article class="style4" style="margin-left:390px">
									<span class="image">
										<img src="./images/은혼 더 파이널.jpg" alt="은혼 더 파이널" />
									</span>
									<a onclick="next_page4();">
										<h2>은혼 더 파이널</h2>
										<div class="content">
											<p>애니매이션 (15세)</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="./images/정글 크루즈.jpg" alt="정글 크루즈" />
									</span>
									<a onclick="next_page5();">
										<h2>정글 크루즈</h2>
										<div class="content">
											<p>액션, 어드밴쳐 (12세) </p>
										</div>
									</a>
								</article>
							</section>
		</div>	
		

		<!-- Scripts -->
			<script src="./js/jquery.fullscreen-min.js"></script>
    		<script src="./js/jquery.fullscreen.js"></script>
			<script src="./js/warp_copy.js"></script>
			<!-- 모달 css 는 각 php 하단에 배치 -->
<div class="fft">

</div>
	</body>
</html>