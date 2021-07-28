function main_page() {

    $(document).ready(function () {

        $(document).on('click', '#mi', function (event) {

            history.pushState(null, null, "main.php");

            $(".con").load("main.php #page1");
            event.preventDefault();
        })
    })
}

// function modal_page() {

//     history.pushState(null, null, "modal.php");

//     $(function () {
//         $("#page1").load("modal.php");
//         $(".fft").load("hakken.php .ft2");
//     });

// }

function modal_page() {
    $(document).ready(function () {

        $(document).on('click', '#md', function (event) {

            history.pushState(null, null, "modal.php");
            event.preventDefault();
            $(".con").load("modal.php");
            $(".ft").load("hakken.php .ft2");

        })

    })
}

function check_page() {

    $(document).ready(function () {

        $(document).on('click', '#ck', function (event) {

            history.pushState(null, null, "check_ticketing.php");

            event.preventDefault();

            $(".con").load("check_ticketing.php");
            $(".ft").load("check_ticketing.php .ft") 
        })
        
            var movie_num = $('#check_num').serialize();
            console.log(movie_num)
            $.ajax({
                type: "post",
                url: "test.php",
                data: {
                    movie_num
                },
                success: function(movie_num) {
                    console.log(movie_num);
					}
            })
        })
    }


function snak_page() {
    $(document).ready(function () {

        $(document).on('click', '#sk', function (event) {

            history.pushState(null, null, "snak.html");

            $(".con").load("snak.html #wrapper");
            // $(".ft").load("hakken.php .ft3");

            event.preventDefault();
        })
    })
}

function home_page() {
    $(document).ready(function () {

        $(document).on('click', '#hm', function (event) {

            history.pushState(null, null, "main.php");

            $(".con").load("main.php #page1");
            $(".ft").load("main.php .ft");

            event.preventDefault();
        })
    })
}

function back() {
    $(document).ready(function () {

        $(document).on('click', '#bk', function (event) {

            history.pushState(null, null, "main.php");
            event.preventDefault();

            $(".con").load("main.php #page1");
            $(".ft").load("main.php .ft");
        })
    });
}

function cancel() {
    $(document).ready(function () {

        $(document).on('click', '#cl', function (event) {

            history.pushState(null, null, "main.php");
            event.preventDefault();

            $(".con").load("main.php #page1");
            $(".ft").load("main.php .ft");
        })
    });
}

function main_back() {
    history.pushState(null, null, "main.php");
    $(".con").load("main.php #page1");
    $(".ft").load("main.php .ft");
}

function index_back() {
    $(document).ready(function () {

        $(document).on('click', '#inx', function (event) {

            history.pushState(null, null, event.target.href);

            $(".con").load(event.target.href);

            event.preventDefault();

        })
    });
}