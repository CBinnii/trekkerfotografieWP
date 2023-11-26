// MENU
function menuMobile() {
    var menu = document.getElementById("menu-button");
    var collapse = document.getElementById("navbar-collapse");

    if (collapse.classList.contains("show")) {
        collapse.classList.remove("show");
    } else {
        collapse.classList.add("show");
    }

    if (menu.classList.contains("cross")) {
        menu.classList.remove("cross");
    } else {
        menu.classList.add("cross");
    }
}

// SCROLL ==================================
window.addEventListener("scroll", function() {
    header = $('#header');

    st = window.pageYOffset || document.body.scrollTop || document.documentElement.scrollTop;
    
    if (st >= 100) {
        header.addClass('scroll');
    } else {
        header.removeClass('scroll');
    }
    // lastScrollTop = st;

}, false);

// Initialize Swiper
var swiperGeral = new Swiper(".slider-geral");

var swiperHome = new Swiper(".slider-home", {
    pagination: {
        el: ".swiper-pagination-slider-home",
        clickable: true,
    },
});

var swiperDoing = new Swiper(".swiper-services", {
    pagination: {
        el: ".swiper-pagination-slider-services",
        clickable: true,
    },
    slidesPerView: 3,
    grid: {
      rows: 2,
    },
    spaceBetween: 30,
    breakpoints: {
        100: {
            slidesPerView: 1,
            spaceBetween: 30,
            grid: {
              rows: 1,
            },
        },
        991: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

var swiperClients = new Swiper(".swiper-clients", {
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination-slider-clients",
        clickable: true
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        100: {
            slidesPerView: 1,
            grid: {
                rows: 2,
            },
        },
        991: {
            slidesPerView: 4,
            grid: {
                rows: 1,
            },
        },
        1500: {
            slidesPerView: 6,
            grid: {
                rows: 1,
            },
        },
    },
});