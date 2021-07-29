<?php
    // function raw_json_encode($input) {
		
	// 	return preg_replace_callback(
	// 		'/\\\\u([0-9a-zA-Z]{4})/',
	// 		function ($matches) {
	// 			return mb_convert_encoding(pack('H*',$matches[1]),'UTF-8','UTF-16');
	// 		},
	// 		json_encode($input)
	// 	);
		
	// }
	// $pay_menu = $_GET['dataObject_'];
    // echo "<pre>";
    // echo $pay_menu;
    // echo "</pre>";
	// $de_pay_menu = json_decode($pay_menu);
    // echo "<pre>";
    // print_r($de_pay_menu);
    // $count = 0;
    // $array_count = 0;
    // $img_path[1024] = '';
    // foreach ($de_pay_menu as $key)
    // {
    //     foreach ($key as $item)
    //     {
    //         if($count == 2)
    //         {
    //             $img_path[$array_count] = $item;
    //             $array_count++;
    //             $count = 0;
    //         }
    //         else{
    //             $count++;
    //         }
            
    //     }
    // }
    // for($i = 0; $i <3; $i++)
    // {
    //     echo "$img_path[$i]<br>";
    // }
    // //$sub_de_pay_menu = $de_pay_menu[0];
    // //print_r($sub_de_pay_menu);
    // //echo $de_pay_menu['0'];
    // echo "</pre>";

    header("Content-Type: application/json"); 
    //$method = $_SERVER['REQUEST_METHOD']; 
    $pay_menu = ""; 
    //$email = ""; 
    if($method == "GET") { 
        // 1. 자바스크립트 객체 또는 serialize() 로 전달 
        $pay_menu = $_GET['dataObject_']; 
        //$email = $_GET['email']; 
        echo(json_encode(array($name))); 
        // 2. JSON.stirngify() 함수로 전달 
        //$data = json_decode($_GET['data']); 
        //echo(json_encode(array("mode" => $_REQUEST['mode'], "name" => $data->name, "email" => $data->email))); 
    }
    // else if($method == "POST") { 
    //     // 1. 자바스크립트 객체 또는 serialize() 로 전달 
    //     $name = $_POST['name']; 
    //     $email = $_POST['email']; 
    //     echo(json_encode(array("mode" => $_REQUEST['mode'], "name" => $name, "email" => $email))); 
    //     // 2. JSON.stirngify() 함수로 전달 
    //     //$data = json_decode($_POST['data']); 
    //     //echo(json_encode(array("mode" => $_REQUEST['mode'], "name" => $data->name, "email" => $data->email))); 
    // } 


?>