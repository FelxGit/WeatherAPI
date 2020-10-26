import Vue from 'vue'
import axios from './config/axios.js'
import App from './views/App'
import Vuelidate from 'vuelidate'
import LoadScript from 'vue-plugin-load-script';

Vue.component('pagination', require('laravel-vue-pagination'));
Vue.use(LoadScript);
Vue.use(Vuelidate)
Vue.prototype.$http = axios

const app = new Vue({
    el: '#app',
    components: { App }
})
