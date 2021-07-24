<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="popup.css" />
		<link rel="stylesheet" href="modalcopy.css" />

		
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    
    
    <!-- js -->

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
    <script>
        function next_page1() {
            $(function() {  
                $("#ONE").load("./2.php");
				});
        }
    </script>
	  <script>
        function next_page2() {
            $(function() {  
                $("#ONE").load("./3.php");
            });
        }
    </script>
	  <script>
        function next_page3() {
            $(function() {  
                $("#ONE").load("./4.php");
            });
        }
    </script>
	  <script>
        function next_page4() {
            $(function() {  
                $("#ONE").load("./5.php");
            });
        }
    </script>

	<script>
        function next_page5() {
            $(function() {  
                $("#ONE").load("./6.php");
            });
        }
    </script>
	</head>

	<body>
	<div class="hd" ondblclick="$(document).fullScreen(true)">
		<!-- <div class="is-preload">
		
			<div id="wrapper">
				
					<div id="main">
						<div class="inner"> -->
							<header>
								<h1 style="color:white"><br />Movie reservation System.</h1>
								<p style="color:white">please use a comfortable machine</p>
							</header>
						<!-- </div>
					</div>
				</div>
			</div> -->
	</div>
						
	
	<div id="ONE">
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" />
									</span>
									<a onclick="next_page1();  paintTodo1();">
										<h2>보스 베이비2</h2>
										<div class="content">
											<p>애니매이션 (전체이용가)</p>
										</div>
									</a>
								</article>

								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a onclick="next_page2();  paintTodo1();">
										<h2>블랙 위도우</h2>
										<div class="content">
											<p>액션, 어드밴쳐 (12세).</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a onclick="next_page3();">
										<h2>귀멸의칼날 무한열차</h2>
										<div class="content">
											<p>애니매이션 (15세)</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
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
										<img src="images/pic05.jpg" alt="" />
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
		   
			
			<!-- <script src="assets/js/jquery.min.js"></script> -->
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script src="./js/jquery.fullscreen-min.js"></script>
    		<script src="./js/jquery.fullscreen.js"></script>
			
	</div>
	</body>
</html>