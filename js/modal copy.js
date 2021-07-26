// 변수들 선언 

const poster = document.querySelector(".poster");
const seatColor = document.querySelector(".seat");
const movieChoice = document.querySelector(".movie_name");
const targetPlace = document.querySelector(".movie_name_place");
const targetDate = document.querySelector(".movie_name_date");
const targetTime = document.querySelector(".movie_name_time");
const targetPeople = document.querySelector(".movie_people");
// const totalA = document.querySelector(".total_price_a");
// const totalB = document.querySelector(".total_price_b");
const ticketing = document.querySelector(".ticketing");
const array=[];

// console.log(targetPeople);

let countSeat =0;
let seatPrice=0;


// poster영역에 이미지 보이게 하는 함수
function paintTodo(posterNumber){
    
    const image = new Image();
    image.src = `images/${posterNumber}.jpg`;   
    image.classList.add(`poster_img`);
    poster.appendChild(image);
}

//초기 함수
function init1(){
    const posterNumber = 1;           // 이부분이엇음
    paintTodo(posterNumber);
   // totalA.innerText = "hello";
}

 init1();



//영화 선택하면 포스터 바뀌는 함수
 movieChoice.addEventListener('change', (e) =>{
     array[3] = [];

     //선택한 영화의 인덱스를 가져오는 구간
     let movieIndex = document.querySelector(".movie_name").selectedIndex;
     let optionIndex = document.querySelector(".movie_name").options;
     let idx = optionIndex[movieIndex].index;
        console.log(movieIndex);
        console.log(optionIndex);
        console.log(idx);

    let movieChoiceString = movieChoice.options[movieChoice.selectedIndex].text;
    console.log("선택한 string:" + movieChoiceString);
    // totalA.innerText += " " + movieChoiceString;
    array[3].push(movieChoiceString);
    a= movieChoiceString;

     let image = document.querySelector(".poster img");
     poster.removeChild(image);
     paintTodo(idx);
})


// 상영관을 선택한 뒤 인원을 선택하고 좌석을 클릭할 수 있게 해주는 함수 
// 그리고 상영관의 종류에 따라 영화가격의 값을 변동 시켰음 2d = 6000, 3d = 8000, 4dx = 12000 
// 비슷한 종류의 if문이 많아서 코드가 상당히 길어짐 
targetPlace.addEventListener('change', (e) =>{
    array[0] = [];
    let targetPlaceString = targetPlace.options[targetPlace.selectedIndex].text;
    console.log("선택한 string:" + targetPlaceString);
    // totalA.innerText += " " + targetPlaceString;
    array[0].push(targetPlaceString);

    if(targetPlaceString == "2 D")
    
    {
        targetPeople.addEventListener('change', (e) =>{

         array[4] = []

    let targetPeopleString = targetPeople.options[targetPeople.selectedIndex].text;
    console.log("선택한 string:" + targetPeopleString);
    // totalA.innerText += " " + targetPeopleString;
    array[4].push(targetPeopleString);

seatColor.addEventListener('click', (e) =>{
    // array[5] = []

    if(targetPeopleString == "1 명")
    {
    if(countSeat >= 1){
        if(e.target.style.backgroundColor != "darkred"){
            alert("1명 손님이십니다.");
        }else{
            e.target.style.backgroundColor="pink";
            // countSeat--;
            // seatPrice -= 6000;
            // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
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
        // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
    }

    } // 1명일 때 if 문 끝

    else if(targetPeopleString == "2 명")
    {
        if(countSeat >= 2){
            if(e.target.style.backgroundColor != "darkred"){
                alert("2명 손님이십니다.");
            }else{
                e.target.style.backgroundColor="pink";
                // countSeat--;
                // seatPrice -= 6000;
                // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
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
            // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
        } 
    }
    else if(targetPeopleString == "3 명")
    {
        if(countSeat >= 3){
            if(e.target.style.backgroundColor != "darkred"){
                alert("3명 손님이십니다.");
            }else{
                e.target.style.backgroundColor="pink";
                // countSeat--;
                // seatPrice -= 6000;
                // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
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
            // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
        } 
    }
    else
    {
        if(countSeat >= 4){
            if(e.target.style.backgroundColor != "darkred"){
                alert("4명 손님이십니다.");
            }else{
                e.target.style.backgroundColor="pink";
                // countSeat--;
                // seatPrice -= 6000;
                // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
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
            // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
        } 
    }
}
);
     
    
    seatColor.addEventListener('click', (e) =>{
        if(targetPeopleString == "1 명")
        {
           if(countSeat > 0){

         if(e.target.style.backgroundColor != "darkred"){
             alert("1인 이용자입니다.");
         }
        }
    }else if(targetPeopleString=="2 명")
    {
        if(countSeat > 1){

            if(e.target.style.backgroundColor != "darkred"){
                alert("2인 이용자입니다.");
            }
           }
    }
    }
    )
})
    }
    else if(targetPlaceString == "3 D")
    {
        {
            targetPeople.addEventListener('change', (e) =>{
                array[4] = [];
        let targetPeopleString = targetPeople.options[targetPeople.selectedIndex].text;
        console.log("선택한 string:" + targetPeopleString);
        // totalA.innerText += " " + targetPeopleString;
        array[4].push(targetPeopleString);
    
    seatColor.addEventListener('click', (e) =>{
    
        if(targetPeopleString == "1 명")
        {
        if(countSeat >= 1){
            if(e.target.style.backgroundColor != "darkred"){
                alert("1명 손님이십니다.");
            }else{
                e.target.style.backgroundColor="pink";
                // countSeat--;
                // seatPrice -= 6000;
                // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
            }   
          
        }else{
            
            if(e.target.style.backgroundColor != "darkred"){
                console.log(countSeat);
                countSeat++;
                seatPrice += 8000;
                e.target.style.backgroundColor="darkred";
                
               
            }else{
                e.target.style.backgroundColor="pink";
                countSeat--;
                seatPrice -= 8000;
            }
            // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
        }
    
        } // 1명일 때 if 문 끝
    
        else if(targetPeopleString == "2 명")
        {
            if(countSeat >= 2){
                if(e.target.style.backgroundColor != "darkred"){
                    alert("2명 손님이십니다.");
                }else{
                    e.target.style.backgroundColor="pink";
                    // countSeat--;
                    // seatPrice -= 6000;
                    // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
                }   
              
            }else{
                
                if(e.target.style.backgroundColor != "darkred"){
                    console.log(countSeat);
                    countSeat++;
                    seatPrice += 8000;
                    e.target.style.backgroundColor="darkred";
                    
                   
                }else{
                    e.target.style.backgroundColor="pink";
                    countSeat--;
                    seatPrice -= 8000;
                }
                // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
            } 
        }
        else if(targetPeopleString == "3 명")
        {
            if(countSeat >= 3){
                if(e.target.style.backgroundColor != "darkred"){
                    alert("3명 손님이십니다.");
                }else{
                    e.target.style.backgroundColor="pink";
                    // countSeat--;
                    // seatPrice -= 6000;
                    // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
                }   
              
            }else{
                
                if(e.target.style.backgroundColor != "darkred"){
                    console.log(countSeat);
                    countSeat++;
                    seatPrice += 8000;
                    e.target.style.backgroundColor="darkred";
                    
                   
                }else{
                    e.target.style.backgroundColor="pink";
                    countSeat--;
                    seatPrice -= 8000;
                }
                // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
            } 
        }
        else
        {
            if(countSeat >= 4){
                if(e.target.style.backgroundColor != "darkred"){
                    alert("4명 손님이십니다.");
                }else{
                    e.target.style.backgroundColor="pink";
                    // countSeat--;
                    // seatPrice -= 6000;
                    // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
                }   
              
            }else{
                
                if(e.target.style.backgroundColor != "darkred"){
                    console.log(countSeat);
                    countSeat++;
                    seatPrice += 8000;
                    e.target.style.backgroundColor="darkred";
                    
                   
                }else{
                    e.target.style.backgroundColor="pink";
                    countSeat--;
                    seatPrice -= 8000;
                }
                // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
            } 
        }
    }
    );
         
        
    
    })
        }
    }
    else
    {
        {
            {
                targetPeople.addEventListener('change', (e) =>{
                    array[4] = [];
            let targetPeopleString = targetPeople.options[targetPeople.selectedIndex].text;
            console.log("선택한 string:" + targetPeopleString);
            // totalA.innerText += " " + targetPeopleString;
            array[4].push(targetPeopleString);
        
        seatColor.addEventListener('click', (e) =>{
        
            if(targetPeopleString == "1 명")
            {
            if(countSeat >= 1){
                if(e.target.style.backgroundColor != "darkred"){
                    alert("1명 손님이십니다.");
                }else{
                    e.target.style.backgroundColor="pink";
                    // countSeat--;
                    // seatPrice -= 6000;
                    // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
                }   
              
            }else{
                
                if(e.target.style.backgroundColor != "darkred"){
                    console.log(countSeat);
                    countSeat++;
                    seatPrice += 12000;
                    e.target.style.backgroundColor="darkred";
                    
                   
                }else{
                    e.target.style.backgroundColor="pink";
                    countSeat--;
                    seatPrice -= 12000;
                }
                // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
            }
        
            } // 1명일 때 if 문 끝
        
            else if(targetPeopleString == "2 명")
            {
                if(countSeat >= 2){
                    if(e.target.style.backgroundColor != "darkred"){
                        alert("2명 손님이십니다.");
                    }else{
                        e.target.style.backgroundColor="pink";
                        // countSeat--;
                        // seatPrice -= 6000;
                        // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
                    }   
                  
                }else{
                    
                    if(e.target.style.backgroundColor != "darkred"){
                        console.log(countSeat);
                        countSeat++;
                        seatPrice += 12000;
                        e.target.style.backgroundColor="darkred";
                        
                       
                    }else{
                        e.target.style.backgroundColor="pink";
                        countSeat--;
                        seatPrice -= 12000;
                    }
                    // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
                } 
            }
            else if(targetPeopleString == "3 명")
            {
                if(countSeat >= 3){
                    if(e.target.style.backgroundColor != "darkred"){
                        alert("3명 손님이십니다.");
                    }else{
                        e.target.style.backgroundColor="pink";
                        // countSeat--;
                        // seatPrice -= 6000;
                        // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
                    }   
                  
                }else{
                    
                    if(e.target.style.backgroundColor != "darkred"){
                        console.log(countSeat);
                        countSeat++;
                        seatPrice += 12000;
                        e.target.style.backgroundColor="darkred";
                        
                       
                    }else{
                        e.target.style.backgroundColor="pink";
                        countSeat--;
                        seatPrice -= 12000;
                    }
                    // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
                } 
            }
            else
            {
                if(countSeat >= 4){
                    if(e.target.style.backgroundColor != "darkred"){
                        alert("4명 손님이십니다.");
                    }else{
                        e.target.style.backgroundColor="pink";
                        // countSeat--;
                        // seatPrice -= 6000;
                        // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
                    }   
                  
                }else{
                    
                    if(e.target.style.backgroundColor != "darkred"){
                        console.log(countSeat);
                        countSeat++;
                        seatPrice += 12000;
                        e.target.style.backgroundColor="darkred";
                        
                       
                    }else{
                        e.target.style.backgroundColor="pink";
                        countSeat--;
                        seatPrice -= 12000;
                    }
                    // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
                } 
            }
        }
        );
             
            
        
        })
            }
        }
    }
})








// 날짜를 선택했을 경우 해당 값을 콘솔에 출력해주고 어레이에 값을 집어넣어주는 함수 
targetDate.addEventListener('change', (e) =>{
    array[1] = [];
    let targetDateString = targetDate.options[targetDate.selectedIndex].text;
    console.log("선택한 string:" + targetDateString);
    // totalA.innerText += " " + targetDateString;
    array[1].push(targetDateString);
})

// 시간을 선택했을 경우 해당 값을 콘솔에 출력해주고 어레이에 값을 집어넣어주는 함수 
targetTime.addEventListener('change', (e) =>{
    array[2] = []
    let targetTimeString = targetTime.options[targetTime.selectedIndex].text;
    console.log("선택한 string:" + targetTimeString);
    // totalA.innerText += " " + targetTimeString;
    array[2].push(targetTimeString);

})

// targetPeople.addEventListener('change', (e) =>{
//     let targetPeopleString = targetPeople.options[targetPeople.selectedIndex].text;
//     console.log("선택한 string:" + targetPeopleString);
//     totalA.innerText += " " + targetPeopleString;
//     array.push(targetPeopleString);

// seatColor.addEventListener('click', (e) =>{

//     if(targetPeopleString == "1 명")
//     {
//     if(countSeat >= 1){
//         if(e.target.style.backgroundColor != "darkred"){
//             alert("1명 손님이십니다.");
//         }else{
//             e.target.style.backgroundColor="pink";
//             // countSeat--;
//             // seatPrice -= 6000;
//             // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
//         }   
      
//     }else{
        
//         if(e.target.style.backgroundColor != "darkred"){
//             console.log(countSeat);
//             countSeat++;
//             seatPrice += 6000;
//             e.target.style.backgroundColor="darkred";
            
           
//         }else{
//             e.target.style.backgroundColor="pink";
//             countSeat--;
//             seatPrice -= 6000;
//         }
//         // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
//     }

//     } // 1명일 때 if 문 끝

//     else if(targetPeopleString == "2 명")
//     {
//         if(countSeat >= 2){
//             if(e.target.style.backgroundColor != "darkred"){
//                 alert("2명 손님이십니다.");
//             }else{
//                 e.target.style.backgroundColor="pink";
//                 // countSeat--;
//                 // seatPrice -= 6000;
//                 // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
//             }   
          
//         }else{
            
//             if(e.target.style.backgroundColor != "darkred"){
//                 console.log(countSeat);
//                 countSeat++;
//                 seatPrice += 6000;
//                 e.target.style.backgroundColor="darkred";
                
               
//             }else{
//                 e.target.style.backgroundColor="pink";
//                 countSeat--;
//                 seatPrice -= 6000;
//             }
//             // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
//         } 
//     }
//     else if(targetPeopleString == "3 명")
//     {
//         if(countSeat >= 3){
//             if(e.target.style.backgroundColor != "darkred"){
//                 alert("3명 손님이십니다.");
//             }else{
//                 e.target.style.backgroundColor="pink";
//                 // countSeat--;
//                 // seatPrice -= 6000;
//                 // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
//             }   
          
//         }else{
            
//             if(e.target.style.backgroundColor != "darkred"){
//                 console.log(countSeat);
//                 countSeat++;
//                 seatPrice += 6000;
//                 e.target.style.backgroundColor="darkred";
                
               
//             }else{
//                 e.target.style.backgroundColor="pink";
//                 countSeat--;
//                 seatPrice -= 6000;
//             }
//             // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
//         } 
//     }
//     else
//     {
//         if(countSeat >= 4){
//             if(e.target.style.backgroundColor != "darkred"){
//                 alert("4명 손님이십니다.");
//             }else{
//                 e.target.style.backgroundColor="pink";
//                 // countSeat--;
//                 // seatPrice -= 6000;
//                 // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `; 
//             }   
          
//         }else{
            
//             if(e.target.style.backgroundColor != "darkred"){
//                 console.log(countSeat);
//                 countSeat++;
//                 seatPrice += 6000;
//                 e.target.style.backgroundColor="darkred";
                
               
//             }else{
//                 e.target.style.backgroundColor="pink";
//                 countSeat--;
//                 seatPrice -= 6000;
//             }
//             // totalB.innerText = `성인 ${countSeat}인     가격 : ${seatPrice}원     `;
//         } 
//     }
// }
// );
     
    
    // seatColor.addEventListener('click', (e) =>{
    //     if(targetPeopleString == "1 명")
    //     {
    //        if(countSeat > 0){

    //      if(e.target.style.backgroundColor != "darkred"){
    //          alert("1인 이용자입니다.");
    //      }
    //     }
    // }else if(targetPeopleString=="2 명")
    // {
    //     if(countSeat > 1){

    //         if(e.target.style.backgroundColor != "darkred"){
    //             alert("2인 이용자입니다.");
    //         }
    //        }
    // }
    // }
    // )
// })

// 예매시 상영관, 날짜, 시간, 영화제목, 인원, 좌석 모두 입력이 되지 않으면 넘어가지 않도록 하는 함수
// 첫 클릭때 잘 선택한 뒤 예매버튼을 누르고나서 값들을 변경했을때도 오류메시지 출력 
ticketing.addEventListener('click', function(){
    let stringTotalA = array[0] + " " + array[1] + " " + array[2] + " " + array[3] + " " + array[4];

    if(array[0] == undefined || array[1] == undefined || array[2] == undefined || array[3] == undefined || array[4] == undefined || countSeat < 1)
        
    {
        alert("선택되지 않은 항목이 있습니다.")
    }
    else if(array[0] == "상영관" || array[1] == "날짜" || array[2] == "시간" || array[3] == "영화제목" || array[4] == "인원")
    {
        alert("입력받지 못한 예메 정보가 있습니다")
    }
    else
    {
        //totalA.innerText = stringTotalA;
    alert(`${stringTotalA}
    성인 ${countSeat}인   가격 : ${seatPrice}원     `   );
    }
})
