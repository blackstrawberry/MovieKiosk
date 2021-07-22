// 슬라이드 할 수 있게 해주는 함수 주석처리하면 이미지도 안불러와짐 
(function() {

    var slidersContainer = document.querySelector('.sliders-container');

    // 영화 상단의 01~05까지 넘겨지게 해주는 것 
    var msNumbers = new MomentumSlider({
        el: slidersContainer,
        cssClass: 'ms--numbers',
        range: [1, 5],
        rangeContent: function (i) {
            return '0' + i;
        },
        style: {
            transform: [{scale: [0.4, 1]}],
            opacity: [0, 1]
        },
        interactive: false
    });

    // 타이틀 배열
    var titles = [
        '보스<br> 베이비2',
        '블랙 <br>위도우',
        '귀멸의칼날 <br>무한열차',
        '은혼 <br>더 파이널',
        '정글 <Br>크루즈'
    ];

    // 타이틀 옆으로 넘길 때 마다 바뀌게 해주는 함수 
    var msTitles = new MomentumSlider({
        el: slidersContainer,
        cssClass: 'ms--titles',
        range: [0, 4],
        rangeContent: function (i) {
            return '<h3>'+ titles[i] +'</h3>';
        },
        vertical: true,
        reverse: true,
        style: {
            opacity: [0, 1]
        },
        interactive: false
    });

    // 장르 배열 
    var Genre = [
        '애니매이션<br>(전체)',
        '액션, 어드밴쳐(12세)',
        '애니매이션<br>(15세)',
        '애니매이션<br>(15세)',
        '액션, 어드밴쳐(12세)'
    ];


    // 장르 옆으로 넘길 때 마다 바뀌게 해주는 함수 
    // Initializing the links slider
    var msLinks = new MomentumSlider({
        el: slidersContainer,
        cssClass: 'ms--links',
        range: [0, 4],
        rangeContent: function (i) {
         
            // return '<a class="ms-slide__link"></a>';
            return Genre[i];
       
        },
        vertical: true,
        interactive: false
    });

    // Get pagination items
    var pagination = document.querySelector('.pagination');
    var paginationItems = [].slice.call(pagination.children);

    // Initializing the images slider
    var msImages = new MomentumSlider({
        // Element to append the slider
        el: slidersContainer,
        // CSS class to reference the slider
        cssClass: 'ms--images',
        // Generate the 4 slides required
        range: [0, 4],
        rangeContent: function () {
            return '<div class="ms-slide__image-container"><div class="ms-slide__image"></div></div>';
        },
        // Syncronize the other sliders
        sync: [msNumbers, msTitles, msLinks],
        // Styles to interpolate as we move the slider
        style: {
            '.ms-slide__image': {
                transform: [{scale: [1.5, 1]}]
            }
        },
        // Update pagination if slider change
        change: function(newIndex, oldIndex) {
            if (typeof oldIndex !== 'undefined') {
                paginationItems[oldIndex].classList.remove('pagination__item--active');
            }
            paginationItems[newIndex].classList.add('pagination__item--active');
        }
    });

    // Select corresponding slider item when a pagination button is clicked
    pagination.addEventListener('click', function(e) {
        if (e.target.matches('.pagination__button')) {
            var index = paginationItems.indexOf(e.target.parentNode);
            msImages.select(index);
        }
    });

})();
