import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import router from './router';
import CompaniesIndex from './components/companies/CompaniesIndex.vue'

window.Alpine = Alpine;

Alpine.start();

createApp({
    components: {
        CompaniesIndex
    }
}).use(router).mount('#app');
