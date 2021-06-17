import Vue from 'vue';
import {createRouter ,createWebHistory} from 'vue-router';

import App from '../components/App.vue';
import LogIn from '../components/LogIn.vue';
import ContactUs from '../components/ContactUs.vue';
import SingUp from '../components/SingUp.vue';
import UserInfo from '../components/UserInfo.vue';
import GetUserInfo from '../components/GetUserInfo.vue';



//Vue.use(VueRouter);

const routes =[

        {
            path: '/ContactUs',
            name: 'ContactUs',
            component: ContactUs
        },
        {
            path: '/GetUserInfo',
            name: 'GetUserInfo',
            component: GetUserInfo
        },
        {
            path: '/',
            name: 'ContactUs',
            component: ContactUs
        },
        {
            path: '/UserInfoI',
            name: 'UserInfo',
            component: UserInfo
        },
        {
            path: '/SingUp',
            name: 'SingUp',
            component: SingUp
        },
        {
            path: '/roaa/LogIn',
            name: 'LogIn',
            component: LogIn
        },
    
]
const router = createRouter({
    history:createWebHistory(process.env.BASE_URL),
    routes
})

export default router;
