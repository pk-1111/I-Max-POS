var swiper = new Swiper(".mySwiper", {
    slidePerView: 1,
    spaceBetween: 0,
    loop: false,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEI: ".swiper-button-next",
        prevEI: ".swiper-button-prev",

    },
});
