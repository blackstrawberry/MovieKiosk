function main_page() {

    history.pushState(null, null, "main.php");

    $(function () {
        $("#inx").load("./main.php #page1");
        
    });

    $(window).on('popstate', function (event) {
        $('#inx').load("./main.php #page1");
       
    });
}


function hakken_page() {

    history.pushState(null, null, "hakken.php");

    $(function () {
        $("#page1").load("modal.php");
        $(".ft").load("hakken.php .ft2");
       
    });

    $(window).on('popstate', function (event) {
        $('#page1').load("hakken.php #page2");
        
    });

}

function main_back() {
    $(document).ready(function () {

        $(document).on('click', '#qq', function (event) {

            history.pushState(null, null, "main.php");
            event.preventDefault();

            $('#page1').load("main.php #page1");
            $(".ft").load("index.php #back_btn");
        })
    });
}

function check_page() {

    history.pushState(null, null, "check_tikecting.php");

    $(function () {
        $("#page1").load("Check_ticketing.php #c_t");
        $(".ft").load("hakken.php .ft3");

    });

    $(window).on('popstate', function (event) {
        $("#page1").load("Check_ticketing.php #c_t");
        $(".ft").load("hakken.php .ft3");
    });

}

function main_back2() {
    $(document).ready(function () {

        $(document).on('click', '#qq', function (event) {
            
            history.pushState(null, null, "main.php");
            event.preventDefault();

            ($("#c_t").load("main.php #page1"));
            

        })
    });
}


function snak_page() {
    $(document).ready(function () {

        $(document).on('click', '#qq', function (event) {
            
            history.pushState(null, null, event.target.href);
            
            $(".ft").load("index.php .ft");
            $("#inx").load("snak.html", "#wrapper");
            event.preventDefault();
            })

            $(window).on('popstate', function (event) {
                $("#inx").load("snak.html", "#wrapper");
               

        })
    });
}

// function payment() {
//     $(document).ready(function () {

//         $(document).on('click', '#qq', function (event) {
//             // 현재 이값에 내가 클릭한 herf를 받아올 수 있는 함수나 변수 넣어야댐 
//             history.pushState(null, null, event.target.href);
//             $("#inx").load(event.target.href, "#pay");
//             alert(event.target.href);
//             event.preventDefault();
//             })

//             $(window).on('popstate', function (event) {
//                 $("#inx").load(location.href, "#pay");
//                 // $(".ft").load("sank.html", ".ft");

//             })
//     });
// }

