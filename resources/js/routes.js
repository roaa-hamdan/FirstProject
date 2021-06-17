import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './components/App.vue';
import LogIn from './components/LogIn.vue';

//Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'Si',
            component: App
        },
        {
            path: '/LogIn',
            name: 'LogIn',
            component: LogIn
        },
    ]
});

export default router;
