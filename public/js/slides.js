const slides = document.querySelectorAll('div.card');
const rightSlide = document.querySelector('a.next');
const leftSlide = document.querySelector('a.prev');
const circles = document.querySelectorAll('span.circle');

let start = 1;

slideRight();
updateCircle(start);

rightSlide.addEventListener('click',  slideRight);
leftSlide.addEventListener('click', slideLeft);


setInterval(autoSlides, 5000);

function autoSlides(){
    if(start > 6 ){ start = 0}

    slidesReset();
    updateCircle(start);

    slides[start].style.display = 'block';
    start++;
}

function showSlides(){
    if(start > 6 ){ start = 0}

    slidesReset();
    updateCircle(start);

    slides[start].style.display = 'block';
}

function slidesReset(){
    Array.from(slides).forEach(function(item){
        item.style.display = 'none';
    });
}


function slideRight(){
    if(start < 7 ){
        start++;
    }else{
        start = 0;
    }
    showSlides();
    updateCircle(start);
}

function slideLeft(){
    console.log(start);
    if(start > 0 ){
        start--;
    }else{
        start = 6;
    }
    showSlides();
    updateCircle(start);
}

function updateCircle(index){
    circleHelper();
    circles[index].classList.add('active');
}

function circleHelper(){
    Array.from(circles).forEach(function(item){
        item.classList.remove('active');
    });
}