// Detect device color scheme and set the dark mode switch accordingly
function setDarkModeSwitch() {
    const darkModeSwitch = document.getElementById('switchDarkMode');
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        darkModeSwitch.checked = true;
    } else {
        darkModeSwitch.checked = false;
    }
}

// Apply the setting on page load
setDarkModeSwitch();

// Listen for changes in the device's color scheme
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setDarkModeSwitch);

// Owl Carousel initialization
$(document).ready(function () {
    $('.motivational_slider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });
});

// Swiper initialization for YouTube Video Carousel
var swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

// Owl Carousel Initialization
$(document).ready(function () {
$('.motivational_slider .owl-carousel').owlCarousel({
loop: true,
margin: 10,
autoplay: true,
autoplayTimeout: 3000,
autoplayHoverPause: true,
responsive: {
    0: { items: 1 },
    600: { items: 2 },
    1000: { items: 3 }
}
});
});

// Swiper Initialization for YouTube Video Carousel
var swiper = new Swiper('.mySwiper', {
slidesPerView: 1,
spaceBetween: 10,
loop: true,
autoplay: {
delay: 4000,
disableOnInteraction: false,
},
pagination: {
el: '.swiper-pagination',
clickable: true,
},
breakpoints: {
640: {
    slidesPerView: 2,
    spaceBetween: 20,
},
1024: {
    slidesPerView: 3,
    spaceBetween: 30,
},
},
});

// Dark Mode Functionality
document.addEventListener('DOMContentLoaded', () => {
const darkModeSwitch = document.getElementById('switchDarkMode');
const body = document.body;

const applyDarkMode = (isDark) => {
if (isDark) {
    body.classList.add('darkMode-active');
    if (darkModeSwitch) darkModeSwitch.checked = true;
} else {
    body.classList.remove('darkMode-active');
    if (darkModeSwitch) darkModeSwitch.checked = false;
}
};

const savedDarkMode = localStorage.getItem('darkMode');
if (savedDarkMode) {
applyDarkMode(savedDarkMode === 'enabled');
} else {
const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
applyDarkMode(prefersDark);
}

if (darkModeSwitch) {
darkModeSwitch.addEventListener('change', () => {
    const isDark = darkModeSwitch.checked;
    applyDarkMode(isDark);
    localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
});
}
});
