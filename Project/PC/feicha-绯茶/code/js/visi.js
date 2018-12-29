$(document).ready(function() {
     var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 0,
      autoplay: true,
      loop:true,
      speed: 2500,
      autoplayDisableOnInteraction: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

});
