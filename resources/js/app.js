require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import { routes } from './routes';
import MainApp from './components/MainApp.vue';
import Carousel3d from 'vue-carousel-3d';
import Vuetify from 'vuetify';
import BootstrapVue from 'bootstrap-vue';
import 'vuetify/dist/vuetify.min.css';
import Aplayer from 'vue-aplayer';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

Vue.use(BootstrapVue);
Vue.use(Vuetify);
Vue.use(Carousel3d);
Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    routes,
    mode: 'history',
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0 };
    }
});

const app = new Vue({
    el: '#app',
    router,
    components: {
        MainApp,
        Aplayer
    }
});
