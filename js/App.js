let swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
      invert: false,
    },
    // autoHeight: true,
    pagination: {
      el: '.blog-slider__pagination',
      clickable: true,
    }
});

  let slides = document.querySelectorAll('.slide');
let btns = document.querySelectorAll('.btn');
let currentSlide = 1;

let manualNav = function(manual){
    slides.forEach((slide) =>{
        slide.classList.remove('active');

        btns.forEach((btn) =>{
            btn.classList.remove('active');
        });
    });
    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () =>{
        manualNav(i);
        currentSlide = i;
    });
});

let repeat = function(activeClass){
    let active = document.getElementsByClassName('active');
    let i = 1;

    let repeater = () =>{
        setTimeout(function(){
            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
            })



            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;

            if(slides.length == i){
                i = 0;
            }

            if(i >= slides.length){
                return;
            }
            repeater();
        }, 10000);
    }
    repeater();
}
repeat();



const btn = document.querySelector('.btn-scroll');

btn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth",
    })
})


document.querySelectorAll('.video-container video').forEach(vid => {
    vid.onclick = () =>{
        document.querySelector('.popup-video').style.display = 'block';
        document.querySelector('popup-video video').src= vid.getAttribute('src');
    }
});

document.querySelector('.popup-video span').onclick = () =>{
    document.querySelector('.popup-video').style.display = 'none';
}
