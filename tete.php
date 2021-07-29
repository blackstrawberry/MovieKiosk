<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modal</title>

    <style>
        .modal {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            top: 0;
            left: 0;
            display: none;
        }

        .modal_content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 25%;
            /* Could be more or less, depending on screen size */
        }
    </style>

    <script>
        $(function() {
            $("img").click(function() {
                $(".modal").fadeIn();
            });

            $(document).mouseup(function (e){
            var container = $('.modal');
            if( container.has(e.target).length === 0){
            container.css('display','none');
            }

            });

        });

        function next_page() {
            $(function() {
                $(".ssee").load("./contents/hakken.php");
            });
        }
    </script>

</head>

<body>
        
    <button>모달창</button>
    <img src="./img/pngegg.png">
    
    <div class="modal container">
        <div class="modal_content">

            <div class="mb-3 container" style="text-align: center;">

            <input type="text" class="form-control" placeholder="예매번호를 입력해주세요"
            maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                
            <input type="submit" value="입력" class="btn btn-light" style="margin-top: 3%;">
            <p>발권발권</p>
            
        </div>
    </div>
</body>

</html>