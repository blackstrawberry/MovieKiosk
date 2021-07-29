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
            $(".ft").load("hakken.php .ft2");
            $("#ONE").load("modal.php");
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
    })
}   // 발권표 번호 확인 페이지 -> 확인 후 발권 정보 페이지 


function snak_page() {
    $(document).ready(function () {

        $(document).on('click', '#sk', function (event) {

            history.pushState(null, null, "snak.html");

            $(".con").load("snak.html #wrapper");
            $("#ONE").load("snak.html");
            // $(".ft").load("hakken.php .ft3");

            event.preventDefault();
        })
    })
}   // 확인 후 발권 정보 페이지 -> 스낵 페이지 

function home_page() {
    $(document).ready(function () {

        $(document).on('click', '#hm', function (event) {

            history.pushState(null, null, "main.php");

            $(".con").load("main.php #page1");
            $(".ft").load("main.php .ft");
            $("#ONE").load("main.php #page1");
            event.preventDefault();
        })
    })
}   // 확인 후 발권 정보 페이지 -> 사용종료, 광고창으로 이동 


function index_back() {
    $(document).ready(function () {

        $(document).on('click', '#inx', function (event) {

            history.pushState(null, null, "index.php");
            event.preventDefault();
            $(".con").load("index.php .con");
            $("#ONE").load("index.php .con");
        })
    });
}  // 확인 후 발권 정보 페이지 -> 사용종료, 광고창으로 이동 

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
    $(".con").load("main.php #page1");
    $(".ft").load("main.php .ft");
    $("#ONE").load("main.php #page1");
}   // 발권 페이지용 홈키, 누르면 메인페이지 이동 

function main_back2() {
    $(document).ready(function () {

        $(document).on('click', '#mb2', function (event) {

            history.pushState(null, null, "index.php");
            event.preventDefault();

            $("#ONE").load("main.php #page1");
            $(".hd").load("index.php .hd");
            $(".fft").load("index.php .ft");
            $("#pad").remove();
        })
    });
}   // 예매 페이지용 홈키, 누르면 메인페이지 이동

// function main_back2() {
//     $(document).ready(function () {

//         $(document).on('click', '#mb2', function (event) {

//             history.pushState(null, null, "index.php");
//             event.preventDefault();

//             $("#ONE").load("index.php .con");
//             $(".hd").load("index.php .hd");
//             $(".fft").load("index.php .ft");
//             $("#pad").remove();
//         })
//     });
// }   

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

function payment_page() {

}

function snak_page2() {

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
