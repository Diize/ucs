/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue').default;
import Vuetify from 'vuetify';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component('albumdisplay-component', require('./components/AlbumDisplayComponent.vue').default);
Vue.component('specificalbum-component', require('./components/SpecificAlbumComponent.vue').default);
Vue.component('playground-component', require('./components/PlayGroundComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const vuetifyOptions = {}

const app = new Vue({
    el: '#app',
    // vuetify: new Vuetify(vuetifyOptions)
});
