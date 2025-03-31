import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Lazy load AOS и Flowbite
document.addEventListener('DOMContentLoaded', () => {
    import('flowbite').then(() => {
        console.log('Flowbite loaded');
    });

    import('aos').then((AOS) => {
        import('aos/dist/aos.css');
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false,
            mirror: false
        });
    });
});
