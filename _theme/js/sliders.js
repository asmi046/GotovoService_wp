var swiper = new Swiper(".main_slider", {
  slidesPerView: 1,
  loop:true,
  navigation: {
      nextEl: ".main_swiper-button-next",
      prevEl: ".main_swiper-button-prev",
    },
});

var rew = new Swiper(".reviews_slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop:true,

  breakpoints: {
    2560: {
      slidesPerView: 3,
    },

    1025: {
      slidesPerView: 3,
    },

    512: {
      slidesPerView: 2,
    },
  },

  navigation: {
      nextEl: ".revews-button-next",
      prevEl: ".revews-button-prev",
    },
});

var swiper = new Swiper(".price_slider", {
  slidesPerView: "auto",
  slidesPerGroup: 1,
  spaceBetween: 30,
});