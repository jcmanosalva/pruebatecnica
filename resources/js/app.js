/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var Vue = require('vue');
Vue.use(require('vue-resource'));


Vue.component('contenedor-component', require('./components/contenedorComponent.vue').default);
Vue.component('formulario-component', require('./components/formularioComponent.vue').default);
Vue.component('datos-component', require('./components/datosComponent.vue').default);
Vue.component('grafi', require('./components/grafi.vue').default);



import formulariocomponent from './components/datosComponent.vue';

const app = new Vue({
    el: '#app',
   components: { formulariocomponent}
});
