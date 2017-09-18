require('./bootstrap');

import Vue from 'vue';
import Vuetify from 'vuetify';
import VeeValidate from 'vee-validate';

window.Vue = Vue;

Vue.use(Vuetify);
Vue.use(VeeValidate);

import ExampleComponent from './components/Example.vue';
import AppLoginForm from './components/Auth/LoginForm.vue';
import AppRegisterForm from './components/Auth/RegisterForm.vue';

Vue.component('example', ExampleComponent);
Vue.component('app-login-form', AppLoginForm);
Vue.component('app-register-form', AppRegisterForm);

const app = new Vue({
    el: '#app'
});
