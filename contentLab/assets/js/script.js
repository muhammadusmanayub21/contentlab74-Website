
window.addEventListener('load', function(){
  document.querySelector('.header__toggler').addEventListener('click',function(){
    document.querySelector('.header__menu').classList.toggle('active');
    document.querySelector('.header__logo').classList.toggle('active');
  
    document.querySelector('.hamburger').classList.toggle('active');
  
  })
  
})
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2.4,
      spaceBetween: 40,
    },
    1200: {
      slidesPerView: 2.9,
      spaceBetween: 62,
    },
  }
});

var swiper = new Swiper(".testimonials__slider", {
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

});

