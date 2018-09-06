require('./bootstrap');

window.Vue = require('vue');

//import Vue from 'vue' //No se usa es equivalente a la de arriba
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
