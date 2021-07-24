const poster = document.querySelector(".poster");
const seatColor = document.querySelector(".seat");
const movieChoice = document.querySelector(".movie_name");
const targetPlace = document.querySelector(".movie_name_place");
const targetDate = document.querySelector(".movie_name_date");
const targetTime = document.querySelector(".movie_name_time");
const totalA = document.querySelector(".total_price_a");
const totalB = document.querySelector(".total_price_b");
const ticketing = document.querySelector(".ticketing");
const array=[];



let countSeat =0;
let seatPrice=0;
seatColor.addEventListener('click', (e) =>{
 
    if(countSeat >= 5){
        if(e.target.style.backgroundColor != "darkred"){
            alert("거리두기 제한으로 6인 미만으로 선택 가능합니다.");
        }else{
            e.target.style.backgroundColor="pink";
            countSeat--;
            seatPrice -= 6000;
            totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
        }   
       
    }else{
        
        if(e.target.style.backgroundColor != "darkred"){
            console.log(countSeat);
            countSeat++;
            seatPrice += 6000;
            e.target.style.backgroundColor="darkred";
            
           
        }else{
            e.target.style.backgroundColor="pink";
            countSeat--;
            seatPrice -= 6000;
        }
        totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
    }
    
});


//영화 선택하면 포스터 바뀌는 함수
 movieChoice.addEventListener('change', (e) =>{

     //선택한 영화의 인덱스를 가져오는 구간
     let movieIndex = document.querySelector(".movie_name").selectedIndex;
     let optionIndex = document.querySelector(".movie_name").options;
     let idx = optionIndex[movieIndex].index;
        console.log(movieIndex);
        console.log(optionIndex);
        console.log(idx);

    let movieChoiceString = movieChoice.options[movieChoice.selectedIndex].text;
    console.log("선택한 string:" + movieChoiceString);
    totalA.innerText += " " + movieChoiceString;
    array.push(movieChoiceString);
    a= movieChoiceString;
     let image = document.querySelector(".poster img");
     poster.removeChild(image);
     paintTodo(idx);

})


targetPlace.addEventListener('change', (e) =>{
    let targetPlaceString = targetPlace.options[targetPlace.selectedIndex].text;
    console.log("선택한 string:" + targetPlaceString);
    totalA.innerText += " " + targetPlaceString;
    array.push(targetPlaceString);
})
targetDate.addEventListener('change', (e) =>{
    let targetDateString = targetDate.options[targetDate.selectedIndex].text;
    console.log("선택한 string:" + targetDateString);
    totalA.innerText += " " + targetDateString;
    array.push(targetDateString);
})
targetTime.addEventListener('change', (e) =>{
    let targetTimeString = targetTime.options[targetTime.selectedIndex].text;
    console.log("선택한 string:" + targetTimeString);
    totalA.innerText += " " + targetTimeString;
    array.push(targetTimeString);
})

ticketing.addEventListener('click', function(){
    let stringTotalA = array[0] + " " + array[1] + " " + array[2] + " " + array[3];
    
    //totalA.innerText = stringTotalA;
    alert(`${stringTotalA}
    성인 ${countSeat}인   가격 : ${seatPrice}원     `   );
})

//장소, 날짜, 시간 선택시 안내(?)에 글씨 바뀌게 하는 함수



//poster영역에 이미지 보이게 하는 함수
function paintTodo(posterNumber){
    
    const image = new Image();
    image.src = `images/${posterNumber}.jpg`;   
    image.classList.add(`poster_img`);
    poster.appendChild(image);
}

function paintTodo3(){
    
    const image = new Image();
    image.src = `images/3.jpg`;   
    image.classList.add(`poster_img`);
    poster.appendChild(image);
}


//초기 함수
function init1(){
    const posterNumber = 4;           // 이부분이엇음
    paintTodo(posterNumber);
   // totalA.innerText = "hello";
}

init1();