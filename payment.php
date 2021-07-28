

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/payment.css">
    <script src="js/payment.js"></script>
</head>
<body>


<script>

	let g_menu =  localStorage.getItem("menu");
	let pay_menu = JSON.parse(g_menu)
	console.log(pay_menu);
	// console.log(pay_menu['0']); // key 값이 0인 value 값 
	// console.log(pay_menu['0'][0]); // 상품이름 
	// console.log(pay_menu['0'][1]); // 상품가격
	console.log(pay_menu['1'][2]); // 상품이미지


</script>



   
	<div class="container">

<?php
	$i = 0;
  while($i<3){

?>
	<section id="cart"> 
	<article class="product">
		<header>
			<a class="remove">
				<img src="<script>pay_menu['0'][2];</scrip>" alt=""> <!-- 경로부분은 서버로 올렸을때 바꿔주셔야 합니다! -->

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
				<a class="btn">Checkout</a>
			</div>

		</div>
	</footer> 
 





</body>
</html>