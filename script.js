// let aladdin = ["F", "G", "J"];
// let coco = ["Y"];
// let frozen = ["A", "B"];
let aladdin = [];
let coco = [];
let frozen = [];
let myMovie = [];

//초기에는 모달이 안보이고 로컬스토리지에서 예약정보가 있으면 모달로 티켓을 볼 수 있도록함
function loadModal(){
  var modal = document.getElementsByClassName("modal")[0];
  var myMovie = localStorage.getItem("myMovie");  
  if(myMovie){
    loadStorageObj(myMovie);
    modal.style.display = "block";
  } else {
    modal.style.display = "none";
    loadSeatList();  
  }
}

//예약내역이 있으면 로컬스토리지에서 값을 가져온다
function loadStorageObj(myMovie){
  let ticketMovieImg = document.getElementsByClassName("ticket-movieImg")[0];
  let ticketMovieTitle = document.getElementsByClassName("ticket-movieTitle")[0];
  let ticketMovieSeats= document.getElementsByClassName("ticket-movieSeats")[0];
  var myMovie = JSON.parse(myMovie);
  var myMovieTitle = myMovie['movieTitle'];
  ticketMovieImg.style.backgroundImage = `url('img/${myMovieTitle}.jpg')`;
  var myMovieSeat = myMovie['seat'];    
  ticketMovieTitle.textContent = myMovieTitle;
  ticketMovieSeats.textContent = ""; 
  for(var i =0;i<myMovieSeat.length;i++){
    ticketMovieSeats.textContent += myMovieSeat[i]+"석 ";
  }
}

// //처음접속시와 영화선택이 없을 경우 seat는 모두 hidden 처리, 선택된 영화가 있을시 hidden을 다시 block처리, 점유된 자리만 선점된 자리로 표시하기
function loadSeatList(seatArr) {
  var seats = document.getElementsByClassName("seat");
  if(seatArr==null){
    for(var i = 0;i < seats.length; i++){
      seats[i].style.display = "none";
    } 
  } else {
      if (seatArr) {
        for(var i = 0;i < seats.length; i++){
          seats[i].style.display = "block";
        }
        for (var i = 0; i < seatArr.length; i++) {
          document.getElementById(`${seatArr[i]}`).classList.add("occupied");
        }
      }
    } 
}

//모든 좌석의 클래스 초기화
function seatListReset() {
  var seats = document.getElementsByClassName("seat");
  for (var i = 0; i < seats.length; i++) {
    seats[i].classList.remove("occupied");
    seats[i].classList.remove("selected");
  }
  //document.getElementsByClassName("seatResult")[0].textContent = "";
}

function selectDefault() {
  document.getElementById("movieList").addEventListener("change", function () {
    var btn1 = document.getElementById("btn1");
    seatListReset();
    var movieTitle = document.querySelector("#movieList > option:checked").value;
    switch (movieTitle) {
      case "all":
        loadSeatList();
        btn1.style.display = "none";
        break;
      case "aladdin":
        loadSeatList(aladdin);
        btn1.style.display = "inline-block";
        break;
      case "coco":
        loadSeatList(coco);
        btn1.style.display = "inline-block";
        break;
      case "frozen":
        loadSeatList(frozen);
        btn1.style.display = "inline-block";
    }
  });
}

//onclick시 이벤트 넣기
function seatOnclickEvent() {
  var seats = document.getElementsByClassName("seat");

  // var selected = document.getElementsByClassName("selected");
  for (let i = 0; i < seats.length; i++) {
    if (!seats[i].classList.contains("occupied")) {
      seats[i].addEventListener("click", function () {
        seats[i].classList.toggle("selected");

        console.log(seats[i]);
      });
    }
  } 
}

//확인 누를시 총 시트리스트 확인, 로컬스토리지에 저장하고 모달창 띄우기
function returnPrice() {
  var btn1 = document.getElementById("btn1");
  btn1.addEventListener("click", checkSeatList);
}

//체크하고 price div에 자리 넣어주기, 변수값 바꿔주기
function checkSeatList() {
  var movieTitle = document.querySelector("#movieList > option:checked").value;
  // var seatResultDiv = document.getElementsByClassName("seatResult")[0];
  var seats = document.getElementsByClassName("selected");
  if(seats.length>4){
    alert("최대 4개의 좌석까지 선택 가능합니다");
  }else{
    var objSeats = [];
    if(seats.length!=0){
      for (var i = 0; i < seats.length; i++) {
        objSeats[i] = seats[i].id;
      }    
    //로컬스토리지에 저장
      localStorage.setItem("myMovie",JSON.stringify({movieTitle:movieTitle,seat:objSeats}));
      loadModal();    
    }
  }
}

//예매취소
function ticketCancel(){
  document.getElementById("btnCancel").addEventListener("click",function(){
    localStorage.removeItem("myMovie");
    location.reload();
  });
}

//초기화
loadModal();
ticketCancel();
seatListReset();
selectDefault();
seatOnclickEvent();
returnPrice();
