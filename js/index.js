let swiper2 = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 6500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  window.addEventListener("scroll", function(){
    const header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });

  const menuBtn = document.querySelector(".nav-menu-btn");
  const closeBtn = document.querySelector(".nav-close-btn");
  const navigation = document.querySelector(".navigation");

  menuBtn.addEventListener("click", () =>{
    navigation.classList.add("active");
  });

  closeBtn.addEventListener("click", () =>{
    navigation.classList.remove("active");
  });