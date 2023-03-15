import { createRouter, createWebHistory } from "vue-router";

import CompaniesIndex from '../components/companies/CompaniesIndex.vue'
import CompaniesCreate from '../components/companies/CompaniesCreate.vue'
import CompaniesEdit from '../components/companies/CompaniesEdit.vue'
import HomeView from '../components/companies/HomeView.vue'

const routes = [
    {
        path: '/dashboard',
        name: 'companies.index',
        component: CompaniesIndex
    },
    
    {
        path: '/companies/create',
        name: 'companies.create',
        component: CompaniesCreate
    },
    {
        path: '/companies/:id/edit',
        name: 'companies.edit',
        component: CompaniesEdit,
        props: true
    },
    {
        path: '/test',
        name: 'home.view',
        component: HomeView
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})

// {# <router-link :to="{ name: 'home.view' }" class="text-sm font-medium">Home</router-link> #}