/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
import './styles/back.scss';

// start the Stimulus application
import './bootstrap';
import Swiper from 'swiper/bundle';

import TinyMCE from 'tinymce';

// Add padding to boddy to account for navbar
addEventListener("turbo:load", () => {

    TinyMCE.init({
        selector: '.tinymce'
    });

    document.body.style.paddingTop = document.getElementById("navbar").getBoundingClientRect().height + 60 + "px";

    let palettes = document.getElementsByClassName("color-palette");

    for (let i = 0; i < palettes.length; i++) {
        let color = palettes[i].getAttribute("data-color");
        let type = palettes[i].className.includes("fill") ? "fill" : "stroke";
        palettes[i].style.border = `2px solid ${color}`;
        palettes[i].innerText = color;

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

import "./js/add-navbar-link"