

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" href="css/payment.css">
    <script src="js/payment.js"></script>

	<link rel="stylesheet" href="css/ticket.css">


<!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>


<script>

	let g_menu =  localStorage.getItem("menu");
	let pay_menu = new Object();
	pay_menu = JSON.parse(g_menu);
	console.log(pay_menu);
	// console.log(pay_menu['0']); // key 값이 0인 value 값 
	// console.log(pay_menu['0'][0]); // 상품이름 
	// console.log(pay_menu['0'][1]); // 상품가격
	// console.log(pay_menu[0][2]); // 상품이미지
	let dataObject = new Object();
	dataObject = JSON.stringify( pay_menu );
	console.log(dataObject);

	// $(function() {
	// 	document.getElementById("cart_length").style.display="none";
	// 	document.getElementById("cart_length").append(Object.keys(pay_menu).length);
	// 	for (let i=0;i<Object.keys(pay_menu).length;i++){
	// 		let img = pay_menu[i][2];
	// 		console.log(img);
	// 		document.getElementById("basket_image"+i).src = img;
	// 	}
	// });

	$.ajax({ 
         type: 'GET', 
         url : "paymentajax.php?mode=GET", 
         data: {dataObject_:dataObject}, 
         dataType:"json", 
         success : function(data, status, xhr) {
            console.log("성공"); 
            console.log(data);
         }, 
         error: function(jqXHR, textStatus, errorThrown) { 
            console.log(jqXHR.responseText); 
         } 
      });

</script>



   
	<div class="container">

<?php
	// $i = 0;
  	// while($i<4){
?>
	<section id="cart"> 
	<!-- <article class="product">
		<header>
			<a class="remove">
				<img id='basket_image<?php //echo $i; ?>'></img>

				<h3>Remove</h3>
			</a>
		</header>

		<div class="content">
			<div id="item_name<?php //echo $i;?>"></div>
			<h1>제목1</h1>
			내용1
		</div>

		<footer class="content">
			<span class="qt-minus">-</span>
			<span class="qt">1</span>
			<span class="qt-plus">+</span>

			<h2 class="full-price">
				14,000원
			</h2>

			<h2 class="price">
				7,000원
			</h2>
		</footer>
	</article> -->
<?php
// 	$i++;
//   }
?>
		</section>

	</div>

	<footer id="site-footer">
		<div class="container clearfix">

			<div class="left">
				<!-- <h2 class="subtotal">Subtotal: <span>163.96</span>€</h2> -->
				<h3 id='MoviePrice' class="tax">Movie : </h3>
				<h3 id='SnackPrice' class="shipping">Snacks : </h3>
			</div>

			<div class="right">
				<h1 id='TotalPrice' class="total">Total: </h1>
				<a class="btn" data-toggle="modal" data-target="#basicModal">Checkout</a>
			</div>
<!------------------------------------------------------------------------->


  <!-- basic modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">결제완료</h4>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


            
            <!-- <div class="modal-body" style="margin-left: 100px;"> -->
            <div class="modal-body" style="margin-left: 100px;">
<!--  ------------------------------------------------------------------------------------------------->        
              


<main class="ticket-system">
  <div class="top">
  <div class="printer" />
  </div>
  <div class="receipts-wrapper">
     <div class="receipts">
        <div class="receipt">
              <!-- <h1>영화입장권</h1> -->
           </svg>
           <div class="route">
              <h2>영화 입장권</h2>
              <h2></h2>
             
           </div>
           <div class="details">
              <div class="item">
                 <span>제목</span>
                 <h3>가디언즈 오브 갤럭시</h3>
              </div>
              <div class="item">
                 <span>결제번호</span>
                 <h3>US6969</h3>
              </div>
              <div class="item">
                 <span>상영시간</span>
                 <h3>08/26/2021 15:33</h3>
              </div>
              <div class="item">
                 <span>Closes</span>
                 <h3>15:03</h3>
              </div>
              <div class="item">
                 <span>가격</span>
                 <h3>12,000</h3>
              </div>
              <div class="item">
                 <span>Seat</span>
                 <h3>C4</h3>
              </div>
           </div>
        </div>
        <div class="receipt qr-code">
           <svg class="qr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.938 29.938">
              <path d="M7.129 15.683h1.427v1.427h1.426v1.426H2.853V17.11h1.426v-2.853h2.853v1.426h-.003zm18.535 12.83h1.424v-1.426h-1.424v1.426zM8.555 15.683h1.426v-1.426H8.555v1.426zm19.957 12.83h1.427v-1.426h-1.427v1.426zm-17.104 1.425h2.85v-1.426h-2.85v1.426zm12.829 0v-1.426H22.81v1.426h1.427zm-5.702 0h1.426v-2.852h-1.426v2.852zM7.129 11.406v1.426h4.277v-1.426H7.129zm-1.424 1.425v-1.426H2.852v2.852h1.426v-1.426h1.427zm4.276-2.852H.002V.001h9.979v9.978zM8.555 1.427H1.426v7.127h7.129V1.427zm-5.703 25.66h4.276V22.81H2.852v4.277zm14.256-1.427v1.427h1.428V25.66h-1.428zM7.129 2.853H2.853v4.275h4.276V2.853zM29.938.001V9.98h-9.979V.001h9.979zm-1.426 1.426h-7.127v7.127h7.127V1.427zM0 19.957h9.98v9.979H0v-9.979zm1.427 8.556h7.129v-7.129H1.427v7.129zm0-17.107H0v7.129h1.427v-7.129zm18.532 7.127v1.424h1.426v-1.424h-1.426zm-4.277 5.703V22.81h-1.425v1.427h-2.85v2.853h2.85v1.426h1.425v-2.853h1.427v-1.426h-1.427v-.001zM11.408 5.704h2.85V4.276h-2.85v1.428zm11.403 11.405h2.854v1.426h1.425v-4.276h-1.425v-2.853h-1.428v4.277h-4.274v1.427h1.426v1.426h1.426V17.11h-.004zm1.426 4.275H22.81v-1.427h-1.426v2.853h-4.276v1.427h2.854v2.853h1.426v1.426h1.426v-2.853h5.701v-1.426h-4.276v-2.853h-.002zm0 0h1.428v-2.851h-1.428v2.851zm-11.405 0v-1.427h1.424v-1.424h1.425v-1.426h1.427v-2.853h4.276v-2.853h-1.426v1.426h-1.426V7.125h-1.426V4.272h1.426V0h-1.426v2.852H15.68V0h-4.276v2.852h1.426V1.426h1.424v2.85h1.426v4.277h1.426v1.426H15.68v2.852h-1.426V9.979H12.83V8.554h-1.426v2.852h1.426v1.426h-1.426v4.278h1.426v-2.853h1.424v2.853H12.83v1.426h-1.426v4.274h2.85v-1.426h-1.422zm15.68 1.426v-1.426h-2.85v1.426h2.85zM27.086 2.853h-4.275v4.275h4.275V2.853zM15.682 21.384h2.854v-1.427h-1.428v-1.424h-1.427v2.851zm2.853-2.851v-1.426h-1.428v1.426h1.428zm8.551-5.702h2.853v-1.426h-2.853v1.426zm1.426 11.405h1.427V22.81h-1.427v1.426zm0-8.553h1.427v-1.426h-1.427v1.426zm-12.83-7.129h-1.425V9.98h1.425V8.554z"/>
           </svg>
           <div class="description">
              <h2>CGV</h2>
              <p>Show QR-code when requested</p>
           </div>
        </div>
     </div>
  </div>
</main>


















<!------------------------------------------------------------------------------------------------------------------------------------->
            </div>


			<div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              <button type="button" class="btn btn-primary" style="display : inline">확인</button>
            </div>















		</div>
	</footer> 
 





</body>
</html>