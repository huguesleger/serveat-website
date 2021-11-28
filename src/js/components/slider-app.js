import Swiper from "swiper/bundle";

export const sliderApp = function () {
  let cardApp = 1;
  const slider = new Swiper(".swiper-container", {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: true,
    },
    // spaceBetween: 30,
    pagination: {
      el: ".wrapper-content-slider",
      clickable: true,
    },
    on: {
      activeIndexChange: function (index) {
        const cardActive = document.querySelector(".card-" + cardApp);
        if (cardActive) {
          cardActive.classList.remove("active");
        }

        cardApp = index.realIndex + 1;

        const currentCard = document.querySelector(".card-" + cardApp);
        if (currentCard) {
          currentCard.classList.add("active");
        }
      },
    },
  });
  return slider;
};
