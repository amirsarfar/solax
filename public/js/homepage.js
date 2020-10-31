$(document).ready(function() {
    selectedCategory = "#category1";
    slideIndex = 0;
    slideIndex2 = 0;

    if(isTouch){
        $(".category-selector").click(
            function() {
                target = $(this).attr("data-target");
                $(selectedCategory)[0].classList.remove("active");
    
                selectors = $(".category-selector");
                for(i=0; i<selectors.length; i++)
                    selectors[i].classList.remove("active");
    
                $(target)[0].classList.add("active");
                $(this)[0].classList.add("active");
                
                selectedCategory = target;
        });
    }
    else{
        $(".category-selector").hover(
            function() {
                target = $(this).attr("data-target");
                $(selectedCategory)[0].classList.remove("active");
    
                selectors = $(".category-selector");
                for(i=0; i<selectors.length; i++)
                    selectors[i].classList.remove("active");
    
                $(target)[0].classList.add("active");
                $(this)[0].classList.add("active");
                
                selectedCategory = target;
            },
            function() {
        });
    }

    $(".carousel .right").click(function() {
        showSlide(++slideIndex);
    });
    $(".carousel .left").click(function() {
        showSlide(--slideIndex);
    });

    $(".simple-carousel .right").click(function() {
        showSlide2(++slideIndex2);
    });
    $(".simple-carousel .left").click(function() {
        showSlide2(--slideIndex2);
    });

    if(isTouch){
        $(".game-card-hoverable").click(function(){
            cards = $(".game-card-hoverable");
            for(i=0; i<cards.length; i++){
                cards[i].classList.remove("active");
            }
            $(this)[0].classList.add("active");
        });
    }else{
        $(".game-card-hoverable").hover(function(){
            cards = $(".game-card-hoverable");
            for(i=0; i<cards.length; i++){
                cards[i].classList.remove("active");
            }
            $(this)[0].classList.add("active");
        },function(){

        });
    }
    
    if(isTouch){
        const style = document.createElement('style');

        // add CSS styles
        style.innerHTML = `
            .coming-soon .game {
                filter: grayscale(0%);
            }
            .coming-soon .game .info{
                display: flex;
                flex-direction: column;
                justify-content: end;
                align-items: center;
                margin: 0 auto;
                width: calc(100% - 1rem);
                background-image: linear-gradient(rgba(11, 11, 11, 0), rgba(11, 11, 11, 0.9));
                color: var(--dark-theme-text-1);
                border-radius: 10px;
                height: 50%;
            }
        `;

        // append the style to the DOM in <head> section
        document.head.appendChild(style);
    }

    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var gradientStroke = ctx.createLinearGradient(0, 0, 0, 250);
    gradientStroke.addColorStop(0, "#FE6E00BA");
    gradientStroke.addColorStop(0.55, "#F679004F");
    gradientStroke.addColorStop(1, "#F0820005");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['00:00', '02:00', '04:00', '06:00', '08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00'],
            datasets: [{
                label: 'تعداد بازیکنان آنلاین',
                data: [{
                    x: 10,
                    y: 100
                }, {
                    x: 15,
                    y: 90
                }, {
                    x: 15,
                    y: 95
                }, {
                    x: 15,
                    y: 85
                }, {
                    x: 15,
                    y: 80
                }, {
                    x: 15,
                    y: 87
                }, {
                    x: 15,
                    y: 92
                }, {
                    x: 15,
                    y: 108
                }, {
                    x: 15,
                    y: 111
                }, {
                    x: 15,
                    y: 105
                }, {
                    x: 15,
                    y: 100
                }, {
                    x: 15,
                    y: 90
                }],
                backgroundColor:gradientStroke,
                borderColor: '#F36B03',
                borderWidth: 3,
                lineTension: 0
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            responsive:true,
            maintainAspectRatio:false
        }
    });
    var myChart = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['نوع اول', 'نوع دوم', 'نوع سوم'],
            datasets: [{
                data: [210, 70, 95],
                backgroundColor:['#5C94F5', '#00BE65', '#FF0057'],
                borderColor: 'transparent',
                borderWidth: 3,
                lineTension: 0
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            responsive:true,
            maintainAspectRatio:false
        }
    });
    
    showSlide(0);
});

function showSlide(i) {
    slides = $(".carousel .slide");
    for (j = 0; j < slides.length; j++) {
        slides[j].classList.remove("active");
    }
    if (i < 0) { i = slides.length - 1; }
    if (i >= slides.length) { i = 0; }

    slides[i].classList.add("active");
    slideIndex = i;
}

function showSlide2(i) {
    slides = $(".simple-carousel .slide");
    for (j = 0; j < slides.length; j++) {
        slides[j].classList.remove("active");
    }
    if (i < 0) { i = slides.length - 1; }
    if (i >= slides.length) { i = 0; }

    slides[i].classList.add("active");
    slideIndex2 = i;
}

//$("ul[data-group='Companies'] li:not([data-company='Microsoft'])")