require('./bootstrap');

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import router from './router';
import FuelStationIndex from './components/FuelStations/FuelStationIndex';

window.Alpine = Alpine;

Alpine.start();

createApp({
    components: {
        FuelStationIndex
    }
}).use(router).mount('#app')