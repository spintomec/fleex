import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import router from './router';
// import CompaniesIndex from './components/companies/CompaniesIndex.vue'
import HomeView from './components/companies/HomeView.vue'


window.Alpine = Alpine;

Alpine.start();

createApp({
    components: {
        // CompaniesIndex,
        HomeView
    }
}).use(router).mount('#app');
