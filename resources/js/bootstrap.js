window._ = require('lodash');
import axios from 'axios';
window.axios = axios;
try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
