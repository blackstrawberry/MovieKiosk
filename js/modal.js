// 변수들 선언 

const poster = document.querySelector(".poster");
const seatColor = document.querySelector(".seat");
const Seat___ = document.querySelector(".seat");
const movieChoice = document.querySelector(".movie_name");
const targetPlace = document.querySelector(".movie_name_place");
const targetDate = document.querySelector(".movie_name_date");
const targetTime = document.querySelector(".movie_name_time");
const targetPeople = document.querySelector(".movie_people");
// const totalA = document.querySelector(".total_price_a");
// const totalB = document.querySelector(".total_price_b");
const ticketing = document.querySelector(".ticketing");

var modal = document.getElementsByClassName("res-modal")[0];

var alertmodal = document.getElementsByClassName("alertmodal")[0];


var array = [];
var objSeats = [];

const reserved = []; 

array[0] = ["2 D"];

// console.log(targetPeople);

let countSeat = 0;
let seatPrice = 0;

paintTodo();
// poster영역에 이미지 보이게 하는 함수
function paintTodo() {

    let movieChoiceString = movieChoice.options[movieChoice.selectedIndex].text;
    console.log("선택한 string:" + movieChoiceString);
    // totalA.innerText += " " + movieChoiceString;
    //array[3].push(movieChoiceString);
    const image = new Image();
    image.src = `images/${movieChoiceString}.jpg`;
    image.classList.add(`poster_img`);
    poster.appendChild(image);
    array[3] = [movieChoiceString];
}

seatOnclickEvent();
checkSeatList();



//onclick시 이벤트 넣기
function seatOnclickEvent() {

    var seats = document.getElementsByClassName("chair");
    var reserved = document.getElementsByClassName("selected");

    console.log(seats.length);

    // if (countSeat < 4) {
        for (let i = 0; i < seats.length; i++) {
            console.log(countSeat);
            if (!seats[i].classList.contains("reserved")) {
                seats[i].addEventListener("click", function () {
                    seats[i].classList.toggle("selected");
                    // countSeat++;

                    //   console.log(reserved);
                    console.log(seats[i]);
                });
            }
        }
    // }


}


function checkSeatList() {
    var reserved = document.getElementsByClassName("selected");
    console.log(reserved);
    // if (reserved.length > 5) {
    //     alert("최대 4개의 좌석까지 선택 가능합니다");
    // } else {

        if (reserved.length != 0) {
            for (var i = 0; i < reserved.length; i++) {
                objSeats[i] = reserved[i].id;
                console.log(objSeats[i]);
            }
        }
       
    // }
}


//영화 선택하면 포스터 바뀌는 함수
//  movieChoice.addEventListener('change', (e) =>{
//      array[3] = [];

//      //선택한 영화의 인덱스를 가져오는 구간
//     //  let movieIndex = document.querySelector(".movie_name").selectedIndex;
//     //  let optionIndex = document.querySelector(".movie_name").options;
//     //  let idx = optionIndex[movieIndex].index;
//     //     console.log(movieIndex);
//     //     console.log(optionIndex);
//     //     console.log(idx);

//     let movieChoiceString = movieChoice.options[movieChoice.selectedIndex].text;
//     console.log("선택한 string:" + movieChoiceString);
//     // totalA.innerText += " " + movieChoiceString;
//     array[3].push(movieChoiceString);
//      let image = document.querySelector(".poster img");
//      poster.removeChild(image);
//      paintTodo(idx);
// })

// 상영관 가져오는 코드 
//let targetPlaceString = targetPlace.options[targetPlace.selectedIndex].text;
//console.log("선택한 string:" + targetPlaceString);
//array[0].push(targetPlaceString);

// 인원 수 가져오는 코드
// let targetPeopleString = targetPeople.options[targetPeople.selectedIndex].text;
// console.log("선택한 string:" + targetPeopleString);
// array[4].push(targetPeopleString);
// targetPeople.addEventListener('change', (e) => {

// 상영관을 선택한 뒤 인원을 선택하고 좌석을 클릭할 수 있게 해주는 함수 
// 그리고 상영관의 종류에 따라 영화가격의 값을 변동 시켰음 2d = 6000, 3d = 8000, 4dx = 12000 
// 비슷한 종류의 if문이 많아서 코드가 상당히 길어짐 

// function loadModal(){
//     modal.style.display = "none";
// }
//     loadModal();

seatColor.addEventListener('click', (e) => {

    if (e.target.style.backgroundColor != "darkred") {
        e.target.style.backgroundColor = "darkred";
        
        countSeat++;
        seatPrice += 6000;
        console.log(countSeat);


        

         if(countSeat>4){
           alertmodal.style.display = "block";
         }
          

    }else if (e.target.style.backgroundColor != "black") {
        e.target.style.backgroundColor = "black";
        
        countSeat--;
        seatPrice -= 6000;
        console.log(countSeat);

         if(countSeat<4){
            alertmodal.style.display = "none";
         }
    }

  

}
);




// 예매시 상영관, 날짜, 시간, 영화제목, 인원, 좌석 모두 입력이 되지 않으면 넘어가지 않도록 하는 함수
// 첫 클릭때 잘 선택한 뒤 예매버튼을 누르고나서 값들을 변경했을때도 오류메시지 출력 
ticketing.addEventListener('click', function () {
      
    
        let targetDateString = targetDate.options[targetDate.selectedIndex].text;
        console.log("선택한 string:" + targetDateString);
        array[1] = (targetDateString);

    
        let targetTimeString = targetTime.options[targetTime.selectedIndex].text;
        console.log("선택한 string:" + targetTimeString);
        array[2] = (targetTimeString);


    let stringTotalA = array[0] + " " + array[1] + " " + array[2] + " " + array[3];

    

    if ( array[1] == undefined || array[2] == undefined ||  countSeat < 1 ||  array[3] == undefined){ 
        alert("선택되지 않은 항목이 있습니다.")
    }
    else if ( array[1] == "날짜" || array[2] == "시간" ) { // || array[4] == "인원"
        alert("입력받지 못한 예메 정보가 있습니다")
    }
    else if(countSeat>4){
        alert("4인이상 예매 불가합니다")
    }
    else {
        if(countSeat==1){
            
            alert("1명 손님이십니다");
            checkSeatList();
            modal.style.display = "block";
            var allarray = array.concat(objSeats);

            alert(`${allarray}
            성인 ${countSeat}인   가격 : ${seatPrice}원     `);
            
        }
        else if(countSeat==2){
            
            alert("2명 손님이십니다");
            modal.style.display = "block";
            checkSeatList();

            var allarray = array.concat(objSeats);
        
            // 이전 얼럿 
            // alert(`${stringTotalA}
            // 성인 ${countSeat}인   가격 : ${seatPrice}원     `);

            
            alert(`${allarray}
            성인 ${countSeat}인   가격 : ${seatPrice}원     `);
       

        }
        else if(countSeat==3){
           
            alert("3명 손님이십니다");
             modal.style.display = "block";
            checkSeatList();

            var allarray = array.concat(objSeats);
   
            alert(`${allarray}
            성인 ${countSeat}인   가격 : ${seatPrice}원     `);
      
        }
        else if(countSeat==4)
        {
            
            alert("4명 손님이십니다");
             modal.style.display = "block";
            checkSeatList();

            var allarray = array.concat(objSeats);
            // alert(`${stringTotalA}
            // 성인 ${countSeat}인   가격 : ${seatPrice}원     `);

            alert(`${allarray}
            성인 ${countSeat}인   가격 : ${seatPrice}원     `);
       
        }
        //totalA.innerText = stringTotalA;
  

    }
}
)

