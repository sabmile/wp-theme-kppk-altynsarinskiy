const swiperFooter = new Swiper('.footer__slider', {
  slidesPerView: 3,
  spaceBetween: 10,
  freeMode: true,
	loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});