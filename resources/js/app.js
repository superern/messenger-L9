require('./bootstrap');
window.Vue = require('vue').default;

import ChatApp from './components/ChatApp';


const app = new Vue({
    el: '#app',
    components: {
        ChatApp
    }
});
