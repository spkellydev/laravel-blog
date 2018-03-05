window.Vue = require('vue');

import VueResource from 'vue-resource'
Vue.use(VueResource);


Vue.component('project-title', require('./components/projects/MainTitle'));


const app = new Vue({
    el: '#project',
    data: {
        title: 'Javascript'
    }
});