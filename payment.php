

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


	    <!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="css/payment.css">
    <script src="js/payment.js"></script>
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

	$(function() {
		document.getElementById("cart_length").style.display="none";
		document.getElementById("cart_length").append(Object.keys(pay_menu).length+1);
		for (let i=0;i<Object.keys(pay_menu).length+1;i++){
			let img = pay_menu[i][2];
			console.log(img);
			document.getElementById("basket_image"+i).src = img;
		}
	});
	
	//$("div#basket_image"+0).append(img);
	// $.ajax({
	// 	type : 'get',
	// 	url : '/MOVIE_JONG/paymentajax.php',
	// 	data : { dataObject_ : dataObject },
	// 	dataType:"json",
	// 	success : function( data ){
	// 		console.log( 'success' );
	// 	},
	// 	error : function( jqxhr , status , error ){
	// 		console.log( jqxhr , status , error );
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
	$i = 0;
  	while($i<3){

?>
	<div id=cart_length style=""></div>
	<section id="cart"> 
	<article class="product">
		<header>
			<a class="remove">
				<img id='basket_image<?php echo $i; ?>'></img>

				<h3>Remove</h3>
			</a>
		</header>

		<div class="content">

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
	</article>


<?php

	$i++;
  }
?>
		


			
			<!-- <article class="product">
				<header>
					<a class="remove">
						<img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/3.jpg" alt="">

						<h3>Remove</h3>
					</a>
				</header>

				<div class="content">

					<h1>제목2</h1>

						내용2
				</div>

				<footer class="content">
					
					<span class="qt-minus">-</span>
					<span class="qt">1</span>
					<span class="qt-plus">+</span>

					<h2 class="full-price">
						79.99€
					</h2>

					<h2 class="price">
						79.99€
					</h2>
				</footer>
			</article> -->



			<!-- <article class="product">
				<header>
					<a class="remove">
						<img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/5.jpg" alt="">

						<h3>Remove</h3>
					</a>
				</header>

				<div class="content">

					<h1>제목3</h1>

						내용3
				
				</div>

				<footer class="content">
					
					<span class="qt-minus">-</span>
					<span class="qt">3</span>
					<span class="qt-plus">+</span>

					<h2 class="full-price">
						53.99€
					</h2>

					<h2 class="price">
						17.99€
					</h2>
				</footer>
			</article> -->

		</section>

	</div>





	<footer id="site-footer">
		<div class="container clearfix">

			<div class="left">
				<h2 class="subtotal">Subtotal: <span>163.96</span>€</h2>
				<h3 class="tax">Taxes (5%): <span>8.2</span>€</h3>
				<h3 class="shipping">Shipping: <span>5.00</span>€</h3>
			</div>

			<div class="right">
				<h1 class="total">Total: <span>177.16</span>€</h1>

				<a class="btn" data-toggle="modal" data-target="#basicModal">Checkout</a>
				
			</div>



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
            <div class="modal-body">
                   
              


            </div>


			<div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              <button type="button" class="btn btn-primary">확인</button>
            </div>












		</div>
	</footer> 
 





</body>
</html>