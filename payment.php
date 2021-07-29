

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
				<a class="btn">Checkout</a>
			</div>

		</div>
	</footer> 
 





</body>
</html>