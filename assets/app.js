/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';
import Swiper from 'swiper/bundle';

// Add padding to body to account for navbar
addEventListener("turbo:load", () => {

    // const cursor = document.getElementById('cursor');
    // const cursorShadow = document.getElementById('cursor-shadow');
    // const cursor_triggers = document.querySelectorAll("a");

    // document.addEventListener('mousemove', (e) => {
    //     cursor.style.left = String(e.x + "px");
    //     cursorShadow.style.left = String(e.x + "px");
    //     cursor.style.top = String(e.y + "px");
    //     cursorShadow.style.top = String(e.y + "px");
    // })

    // for (let i = 0; i < cursor_triggers.length; i++) {
    //     cursor_triggers[i].addEventListener('mouseenter', () => {
    //         cursor.classList.add('hovering');
    //         cursorShadow.classList.add('hovering');
    //     })
    //     cursor_triggers[i].addEventListener('mouseleave', () => {
    //         cursor.classList.remove('hovering');
    //         cursorShadow.classList.remove('hovering');
    //     })
    // }

    let palettes = document.getElementsByClassName("color-palette");

    for (let i = 0; i < palettes.length; i++) {
        let color = palettes[i].getAttribute("data-color");
        let type = palettes[i].className.includes("fill") ? "fill" : "stroke";
        palettes[i].style.border = `2px solid ${color}`;

        if (type === "fill") {
            palettes[i].style.background = color;
            palettes[i].style.color = "white";
        } else {
            palettes[i].style.color = color;
            palettes[i].style.background = "white";
        }
    }

    if (innerWidth < 768 && document.getElementsByClassName("moodboard")[0] && document.getElementsByClassName("swiper")[0]) {
        new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    } else {
        if (document.getElementsByClassName("swiper")[0]) document.getElementsByClassName("swiper")[0].remove();
    }
});