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

var v_rew = new Swiper(".video_reviews_slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop:true,

  breakpoints: {
    1920: {
      slidesPerView: 4,
    },

    1025: {
      slidesPerView: 3,
    },

    512: {
      slidesPerView: 2,
    },
  },

  navigation: {
      nextEl: ".video-revews-button-next",
      prevEl: ".video-revews-button-prev",
    },
});

var swiper = new Swiper(".price_slider", {
  slidesPerView: "auto",
  slidesPerGroup: 1,
  spaceBetween: 30,
});

var breakdowns_slider = new Swiper(".breakdowns_slider", {
  slidesPerView: "auto",
  slidesPerGroup: 1,
  spaceBetween: 30,
});


var masters_1 = new Swiper(".master-info1", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop:true,

  breakpoints: {
    1920: {
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
      nextEl: ".masters1-button-next",
      prevEl: ".masters1-button-prev",
    },
});

var masters_2 = new Swiper(".master-info2", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop:true,

  breakpoints: {
    1920: {
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
      nextEl: ".masters2-button-next",
      prevEl: ".masters2-button-prev",
    },
});