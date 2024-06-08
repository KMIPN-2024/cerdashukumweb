import './bootstrap';
import 'flowbite';
import AOS from 'aos';
import 'aos/dist/aos.css';

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist'

Alpine.plugin(persist)
window.Alpine = Alpine;

Alpine.start();
AOS.init({
    // Global settings:
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    duration: 1200
});