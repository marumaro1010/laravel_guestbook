require('./bootstrap');
var $ = require('jquery/dist/jquery');
window.$ = window.jQuery = $;
import 'jquery-ui-bundle';
import 'jquery-ui-bundle/jquery-ui.css';
import 'bootstrap/dist/css/bootstrap.min.css';

window.Vue = require('vue');
window.Vuex = require('vuex');
window.axios = require('axios');
window.VueAxios = require('vue-axios');

Vue.use(Vuex,axios,VueAxios);
