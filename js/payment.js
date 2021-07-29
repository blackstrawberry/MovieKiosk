var check = false;

function changeVal(el) {
  var qt = parseFloat(el.parent().children(".qt").html());
  var price = parseFloat(el.parent().children(".price").html());
  var eq = Math.round(price * qt*100)/100;
  
  el.parent().children(".full-price").html( eq + "원" );
  
  changeTotal();			
}

function changeTotal() {
  
  // var price = 0;
  
  // $(".full-price").each(function(index){
  //   price += parseFloat($(".full-price").eq(index).html());
  // });
  
  // price = Math.round(price * 100) / 100;
  // var tax = Math.round(price * 0.05 * 100) / 100
  // var shipping = parseFloat($(".shipping span").html());
  // var fullPrice = Math.round((price + tax + shipping) *100) / 100;
  
  // if(price == 0) {
  //   fullPrice = 0;
  // }
  
  // $(".subtotal span").html(price);
  // $(".tax span").html(tax);
  // $(".total span").html(fullPrice);
  
  let MoviePrice = 0;
  let SnackPrice = 0;
  let i=0;
  function checkerr(){
    while (i<=20){//스낵 구매갯수 20넘어가지 않게 주의....
      try{
        SnackPrice += Number(document.getElementById('price'+i).innerHTML.replace("원",""));
        i++;
      } catch(e){
        i++;
        checkerr();
      }
    }
  }
  checkerr();
  let totalPrice = Number(MoviePrice) + SnackPrice;
  let snack = "Snacks: "+ SnackPrice+ "\\";
  let total = "Total: "+totalPrice+"\\";

  document.getElementById("SnackPrice").innerHTML = snack;	
  document.getElementById("TotalPrice").innerHTML = total;	

}

$(document).ready(function(){

  let g_menu =  localStorage.getItem("menu");
  let pay_menu = new Object();
  pay_menu = JSON.parse(g_menu);
  
  for (let i=0;i<Object.keys(pay_menu).length;i++){
  let cart = "<article class=\"product\"\>"+
                "<header\>"+
                  "<a class=\"remove\">"+
                    "<img src="+pay_menu[i][2]+"></img>"+
                    "<h3>Remove</h3>"+
                  "</a>"+
              "</header>"+
              "<div class=\"content\">"+
                "<div id=\"item_name<?php echo $i;?>\"></div>"+
                "<h1>"+pay_menu[i][0]+"</h1>"+
              "</div>"+

              "<footer class=\"content\">"+
                "<span class=\"qt-minus\">-</span>"+
                "<span id=\"count"+[i]+"\" class=\"qt\">1</span>"+
                "<span class=\"qt-plus\">+</span>"+
                "<h2 id=\"price"+[i]+"\" class=\"full-price\">"+
                  pay_menu[i][1]+
                "</h2>"+
                "<h2 class=\"price\">"+
                  pay_menu[i][1]+
              "</h2>"+
              "</footer>"+
              "</article>";
    $("#cart").append(cart);            
  };
  

  let MoviePrice = 0;
  let SnackPrice = 0;
 
  for (let i=0;i<document.getElementsByTagName("article").length;i++){
    SnackPrice += Number(document.getElementById('count'+i).innerHTML) * Number(document.getElementById('price'+i).innerHTML.replace("원",""));
  }
  console.log(SnackPrice); 
  let totalPrice = Number(MoviePrice) + SnackPrice;
  document.getElementById('MoviePrice').append(MoviePrice+"\\");
  document.getElementById('SnackPrice').append(SnackPrice+"\\");
  document.getElementById('TotalPrice').append(totalPrice+"\\");



  
  $(".remove").click(function(){
    var el = $(this);
    el.parent().parent().addClass("removed");
    window.setTimeout(
      function(){
        el.parent().parent().slideUp('fast', function() { 
          el.parent().parent().remove(); 
          if($(".product").length == 0) {
            if(check) {
              $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
            } else {
              $("#cart").html("<h1>No products!</h1>");
            }
          }
          changeTotal(); 
        });
      }, 200);
  });
  
  $(".qt-plus").click(function(){
    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
    
    $(this).parent().children(".full-price").addClass("added");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
  });
  
  $(".qt-minus").click(function(){
    
    child = $(this).parent().children(".qt");
    
    if(parseInt(child.html()) > 1) {
      child.html(parseInt(child.html()) - 1);
    }
    
    $(this).parent().children(".full-price").addClass("minused");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
  });
  
  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
  
  $(".btn").click(function(){
    check = true;
    $(".remove").click();
  });

    
  

  


});