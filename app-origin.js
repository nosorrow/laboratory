import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';

import 'aos/dist/aos.css'; // You can also use <link> for styles

AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: false,
    mirror: false
})


window.Alpine = Alpine;
Alpine.start();
