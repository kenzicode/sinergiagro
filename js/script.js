/**
 * Theme function js.
 *
 */

(function ($) {
  // const btn = document.querySelector("button.mobile-menu-button");
  // const menu = document.querySelector(".mobile-menu")

  // btn.addEventListener("click", () => {
  //   menu.classList.toggle("hidden");
  // })

  // AOS.init();

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 60,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
    },
  });
})();
