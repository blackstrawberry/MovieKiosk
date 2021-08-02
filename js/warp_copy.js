// 페이지 제어용 js

function main_page() {

    $(document).ready(function () {

        $(document).on('click', '#mi', function (event) {

            history.pushState(null, null, "main.php");

            $(".con").load("main.php #page1"); 

        })
    })
}    // 광고페이지 - > 메인페이지

function modal_page() {
    $(document).ready(function () {

        $(document).on('click', '#md', function (event) {

            history.pushState(null, null, "modal.php");
            event.preventDefault();
            $(".con").load("modal.php");
            $("#ONE").load("modal.php");
            $(".fft").load("main.php .ft");
        })

    })
}   // 메인페이지 -> 발권 표 번호 확인 페이지

function check_page() {

    $(document).ready(function () {

        $(document).on('click', '#ck', function (event) {

            history.pushState(null, null, "check_ticketing.php");

            event.preventDefault();

            $(".con").load("check_ticketing.php");
            $(".ft").load("check_ticketing.php .ft");
            $("#ONE").load("check_ticketing.php");

        })

        var movie_num = $('#check_num').serialize();
           
        movie_num = Number(movie_num.replace("c_num=","")); 
        console.log(movie_num)



        $.ajax({
            type : "POST",
            url : "sql1.php",
            data: {num1 : movie_num},
            dataType : "text",
            error : function(){ alert('통신실패!!');  },
            success : function(res){ 
                localStorage.setItem("local1", res);   
            }
         });

         $.ajax({
            type : "POST",
            url : "sql2.php",
            data: {num2 : movie_num},
            dataType : "text",
            error : function(){ alert('통신실패!!');  },
            success : function(res){ 
                localStorage.setItem("local2", res);   
            }
         });
         
         
         $.ajax({
            type : "POST",
            url : "sql3.php",
            data: {num3 : movie_num},
            dataType : "text",
            error : function(){ alert('통신실패!!');  },
            success : function(res){ 
                localStorage.setItem("local3", res);   
            }
         }); 

    })
}   // 발권표 번호 확인 페이지 -> 확인 후 발권 정보 페이지 


function snak_page() {
    $(document).ready(function () {

        $(document).on('click', '#sk', function (event) {

            history.pushState(null, null, "snak.html");
            
            $("#ONE").load("snak.html",function(){
                ("#ONE").load("index.php");
            })
            $(".con").load(location.href);
            $(".ft").remove();
            $("#pad").remove();

            event.preventDefault();
        })
        
    })
}   // 확인 후 발권 정보 페이지 -> 스낵 페이지 

function home_page() {
    $(document).ready(function () {

        $(document).on('click', '#hm', function (event) {

            history.pushState(null, null, "main.php");

            $(".con").load("main.php ");
            $(".fft").load("main.php .ft");
            $(".ft").load("main.php .ft");
            $("#ONE").load("main.php") ;
            event.preventDefault();
        })
    })
}   // 확인 후 발권 정보 페이지 -> 사용종료, 광고창으로 이동 


function index_back() {
    $(document).ready(function () {

        $(document).on('click', '#inx', function (event) {

            history.pushState(null, null, "index.php");
            event.preventDefault();
            $(".con").load("index.php .con", function(){
                alert("이용 감사합니다");
                location.href="index.php";
            })
        })

            $("#ONE").load("index.php .con", function(){
                alert("이용 감사합니다");
                location.href="index.php";
            })
        })
    }
  // 확인 후 발권 정보 페이지 -> 사용종료, 광고창으로 이동 

function cancel() {
    $(document).ready(function () {

        $(document).on('click', '#cl', function (event) {

            history.pushState(null, null, "main.php");
            event.preventDefault();

            $(".con").load("main.php #page1");
            $(".ft").load("main.php .ft");
            $("#ONE").load("main.php #page1");
        })
    });
}   // 발권 정보 페이지 -> 발권 안하고 취소, 메인 페이지 이동 

function ticket_page() {


    $(document).on('click', '#ti', function (event) {

        history.pushState(null, null, "index2.php");

        event.preventDefault();
        $("#page1").load("index2.php");
    })

} // 메인페이지 -> 예매 페이지 이동


function main_back() {
    history.pushState(null, null, "main.php");
    $(".con").load("main.php",function(){
        $(".ft").load("index.php .ft");    
    });
    $("#ONE").load("main.php #page1", function(){
        localStorage.clear();
    })
}   // 발권 페이지용 홈키, 누르면 메인페이지 이동 

function main_back2() {
    $(document).ready(function () {

        $(document).on('click', '#mb2', function (event) {

            history.pushState(null, null, "main.php");
            event.preventDefault();
            $(".con").load("main.php")
            $("#ONE").load("main.php", function(){
                localStorage.clear();
            })
            // $(".fft").load("index.php .ft");
            $("#pad").remove();
        })
    });
}   // 예매 페이지용 홈키, 누르면 메인페이지 이동

function payment_page() {


    $(document).on('click', '#pm', function (event) {

        history.pushState(null, null, "payment.php");

        event.preventDefault();
        $(".con").load("payment.php");
        $("#ONE").load("payment.php");
        $(".hd").load("index2.php .hd")
        
    })

}

function ticket_page() {


    $(document).on('click', '#ti', function (event) {

        history.pushState(null, null, "index2.php");

        event.preventDefault();
        $("body").load("index2.php");
    })

} // 메인페이지 -> 예매 페이지 이동


///////////////////// 아래부터는 예매용 //////////////////////

function next_page1() {
    $(function () {
        $("#ONE").load("./movie_boss.php");
    });
}


function next_page2() {
    $(function () {
        $("#ONE").load("./movie_black.php");
    });
}

function next_page3() {
    $(function () {
        $("#ONE").load("./movie_guimyeol.php");
    });
}


function next_page4() {
    $(function () {
        $("#ONE").load("./movie_eunhon.php");
    });
}

function next_page5() {
    $(function () {
        $("#ONE").load("./movie_jug.php");
    });
}


// 모달창 닫는 함수

function close_snack() {
    $('#open-modal').fadeIn();
}
$(document).mouseup(function (e) {
    var container = $('#open-modal');
    if (container.has(e.target).length === 0) {
        container.css('display', 'none');
    }
});

function close_alert() {
    $('#open-m').fadeIn();

}
$(document).mouseup(function (e) {
    var container = $('#open-m');
    if (container.has(e.target).length === 0) {
        container.css('display', 'none');
    }
});

function close_noenter() {
    $('#open-a').fadeIn();
}
$(document).mouseup(function (e) {
    var container = $('#open-a');
    if (container.has(e.target).length === 0) {
        container.css('display', 'none');
    }

});


// 뒤로가기 제어 ( 시간없어서 버림 )

// function back() {
//     $(document).ready(function () {

//         $(document).on('click', '#bk', function (event) {

//             history.pushState(null, null, "main.php");
//             event.preventDefault();

//             $(".con").load("main.php #page1");
//             $(".ft").load("main.php .ft");
//         })
//     });
// }

// function back2() {
//     $(document).ready(function () {

//         $(document).on('click', '#bk', function (event) {

//             history.pushState(null, null, "main.php");
//             event.preventDefault();

//             $("#one").load("main.php #page1");
//             $(".ft").load("main.php .ft");
//         })
//     });
// }
