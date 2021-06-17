require('./bootstrap');
require('@coreui/coreui/dist/js/coreui.bundle.min');
import {createApp} from 'vue';
import App from './components/App.vue';
import router from './router';



  createApp(App).use(router).mount('#app');