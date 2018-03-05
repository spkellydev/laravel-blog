window.Vue = require('vue');

import VueResource from 'vue-resource'
Vue.use(VueResource);

Vue.component('project-header', require('./components/projects/ProjectHeader'));
Vue.component('project-title', require('./components/projects/ProjectTitle'));
Vue.component('project-image', require('./components/projects/ProjectImage'));


const app = new Vue({
    el: '#project',
    data: {
        title: 'Javascript'
    }
});