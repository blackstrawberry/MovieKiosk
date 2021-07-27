<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<link rel="stylesheet" href="modalcopy.css" />
	  <link rel="stylesheet" href="./css/modal.css" /> 



		
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<!-- 모달창 예매버튼 클릭시 나타나도록 구현 -->

<div id="open-modal" class="modal-window">
    <div id="main">
		<label for="open-modal"></label>
		<img src="./images/snack.png" style="width:200px;">
		<h2>스낵류를 드시겠습니까?</h2>
      <a href="#" title="Close" class="modal-close">x</a> 
        <!-- modal -->

       <div class="card">
           
             <div class="text">
               <div class="title" style="margin-top:80px; margin-left:10px;" >
                 <h3>예(스낵창)/아니요(결제창)</h4>
               </div>
            
             </div>
     
             <div class="buttons">
				<!-- 예 누르거나 아니오 눌렀을 때 함수 걸어놓으면 이동가능 -->
               <div class="button" onclick="">예</div>
               <div class="button" onclick="">아니요</div>
             </div>
        </div>
      </div>
  </div>

  <div id="open-modal" class="modal-window">
    <div id="main1">
		<label for="open-modal"></label>
		<img src="./images/snack.png" style="width:200px;">
		<h2>스낵류를 드시겠습니까?</h2>
      <a href="#" title="Close" class="modal-close">x</a> 
        <!-- modal -->

       <div class="card">
           
             <div class="text">
               <div class="title" style="margin-top:80px; margin-left:10px;" >
                 <h3>예(스낵창)/아니요(결제창)</h4>
               </div>
            
             </div>
     
             <div class="buttons">
				<!-- 예 누르거나 아니오 눌렀을 때 함수 걸어놓으면 이동가능 -->
               <div class="button" onclick="">예</div>
               <div class="button" onclick="">아니요</div>
             </div>
        </div>
      </div>
  </div>




            <div id="CM">
				<div>
					<h2 style="color:white; margin-top:-30px;">상영관부터 순서대로 클릭해주세요!</h2>
				</div>
				<!-- <input type="checkbox" id="popup">
				<label for="popup"><img src="./images/res.jpg" style="width:395px; height: 210px; margin-left:-90px; margin-top:-90px;"></label>
				<div>
					<div>
						<label for="popup"></label> -->
						<div class="container">
							<div class="inner_container">
												<div class="select_movie">
												
													<select class="movie_name_place" >
														<!-- <option>상영관</option> -->
															<option selected>2 D</option>
															<!-- <option>3 D</option>
															<option>4 D X</option> -->
															
														</select>
														<select class="movie_name" >
															<!-- <option>영화제목</option> -->
															<option selected>보스 베이비2</option>
															<!-- <option>블랙 위도우</option>
															<option>귀멸의칼날 무한열차</option>
															<option>은혼 더 파이널</option>
															<option>정글 크루즈</option> -->
														
										
														</select>
														<select class="movie_name_date">
															<option>날짜</option>
															<option>2021.07.24(토)</option>
															<option>2021.07.25(일)</option>
															<option>2021.07.26(월)</option>
															<option>2021.07.27(화)</option>
															<option>2021.07.28(수)</option>
															
															
															
															
														</select>
														<select class="movie_name_time">
															<option>시간</option>
															<option>09:00 - 10:50 </option>
															<option>10:30 - 12:20</option>
															<option>12:00 - 13:50</option>
															<option>13:30 - 15:20</option>
															<option>16:00 - 17:50</option>
															<option>19:00 - 20:50</option>
														</select>
														<!-- <select class="movie_people">
															<option>인원</option>
															<option>1 명</option>
															<option>2 명 </option>
															<option>3 명</option>
															<option>4 명</option>
														
									
														</select> -->
												   
												</div>
								
												<div class="poster">
									
												</div>
												<div class="reservation">
													
													<div class="seat_reservation">
														<div class="seat_reservation_left">
															<div class="screen">SCREEN</div>	
														
															<div class="seat">
																
															
																<div class="seat_left">
																	<table class="seat_chair">
																		<tr>
																			<td class="chair" id="a1">A1</td>
																			<td class="chair" id="a2">A2</td>
																		</tr>
																		<tr>
																			<td class="chair" id="b1">B1</td>
																			<td class="chair" id="b2">B2</td>
																		</tr>
																		<tr>
																			
																			<td class="chair" id="c1">C1</td>
																			<td class="chair" id="c2">C2</td>
																		</tr>
																		<tr>
																			<td class="chair" id="d1">D1</td>
																			<td class="chair" id="d2">D2</td>
																		</tr>
																		<tr>
																			<td class="chair" id="e1">E1</td>
																			<td class="chair" id="e2">E2</td>
																		</tr>
																		<tr>
																			<td class="chair" id="f1">F1</td>
																			<td class="chair" id="f2">F2</td>
																		</tr>
																		<tr>
																			<td class="chair" id="g1">G1</td>
																			<td class="chair" id="g2">G2</td>
																		</tr>
									
																	</table>
									
																</div>
																<div class="seat_middle">
																	<table class="seat_chair_middle">
																		<tr>
																			<td class="chair" id="a3">A3</td>
																			<td class="chair" id="a4">A4</td>
																			<td class="chair" id="a5">A5</td>
																			<td class="chair" id="a6">A6</td>
																		</tr>
																		<tr>
																			<td class="chair" id="b3">B3</td>
																			<td class="chair" id="b4">B4</td>
																			<td class="chair" id="b5">B5</td>
																			<td class="chair" id="b6">B6</td>
																		</tr>
																		<tr>
																			<td class="chair" id="c3">C3</td>
																			<td class="chair" id="c4">C4</td>
																			<td class="chair" id="c5">C5</td>
																			<td class="chair" id="c6">C6</td>
																		</tr>
																		<tr>
																			<td class="chair" id="d3">D3</td>
																			<td class="chair" id="d4">D4</td>
																			<td class="chair" id="d5">D5</td>
																			<td class="chair" id="d6">D6</td>
																		</tr>
																		<tr>
																			<td class="chair" id="e3">E3</td>
																			<td class="chair" id="e4">E4</td>
																			<td class="chair" id="e5">E5</td>
																			<td class="chair" id="e6">E6</td>
																		</tr>
																		<tr>
																			<td class="chair" id="f3">F3</td>
																			<td class="chair" id="f4">F4</td>
																			<td class="chair" id="f5">F5</td>
																			<td class="chair" id="f6">F6</td>
																		</tr>
																		<tr>
																			<td class="chair" id="g3">G3</td>
																			<td class="chair" id="g4">G4</td>
																			<td class="chair" id="g5">G5</td>
																			<td class="chair" id="g6">G6</td>
																		</tr>
									
																	</table>
									
																</div>
																<div class="seat_right">
																	<table class="seat_chair_right">
																		<tr>
																			<td class="chair" id="a7">A7</td>
																			<td class="chair" id="a8">A8</td>
																		</tr>
																		<tr>
																			<td class="chair" id="b7">B7</td>
																			<td class="chair" id="b8">B8</td>
																		</tr>
																		<tr>
																			<td class="chair" id="c7">C7</td>
																			<td class="chair" id="c8">C8</td>
																		</tr>
																		<tr>
																			<td class="chair" id="d7">D7</td>
																			<td class="chair" id="d8">D8</td>
																		</tr>
																		<tr>
																			<td class="chair" id="e7">E7</td>
																			<td class="chair" id="e8">E8</td>
																		</tr>
																		<tr>
																			<td class="chair" id="f7">F7</td>
																			<td class="chair" id="f8">F8</td>
																		</tr>
																		<tr>
																			<td class="chair" id="g7">G7</td>
																			<td class="chair" id="g8">G8</td>
																		</tr>
									
																	</table>
																</div>
															</div>

														</div>
														<div class="seat_reservation_right">

															<div class="ticketing" id="checkout">
													 <a href="#open-modal">
															<input type="submit" name="submit" value="예매"    />	
														<!-- </a> -->
														</div>
															<div class="color_explanation">
																<table>
																	<tr>
																		<!-- 좌석값과 안겹치게 하려고 ___ 추가 -->
																		<td class="selected___"></td>
																		<td style="color:#EAED0E;">선택</td>
																	</tr>
																	<tr>
																		<!-- 예약 좌석값과 안겹치게 하려고 ___ 추가 -->
																		<td class="reserved___"></td>
																		<td style="color:#EAED0E;">예약</td>
																	</tr>
																	<tr>
																		<td class="empty"></td>
																		<td style="color:#EAED0E;">가능</td>
																	</tr>
																</table>
															</div>
														</div>
													<!-- </div>
												  
														<div class="total_price_a">
														
														</div>
														<div class="total_price_b">
															
														</div>
												</div> -->
											</div>
										</div>
									</div>
									<!-- <label for="popup"></label> -->
								</div>
							</div>	
								</article>  
							
							</section>
						
			
							<div>

                      </div>
                </div>

						</div>

						<script src="./js/modal.js"></script>
</body>
					
 