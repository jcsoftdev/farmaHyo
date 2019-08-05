/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import VueSweetalert2 from 'vue-sweetalert2';

Vue.use(VueSweetalert2);
window.Vuetify = require('vuetify');
Vue.use(Vuetify);
import 'vuetify/dist/vuetify.min.css';


// colors 

// import '../src/sass/app.scss';
// OR
// require('../src/sass/app.scss');
// import vuetify from '@/plugins/vuetify' 
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('producto-component', require('./components/ProductoComponent.vue').default);
Vue.component('concentracion-component', require('./components/ConcentracionComponent.vue').default);
Vue.component('medicamento-component', require('./components/MedicamentosComponent.vue').default);
Vue.component('presentacion-component', require('./components/PresentacionComponent.vue').default);
Vue.component('laboratorio-component', require('./components/LaboratorioComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    vuetify: new Vuetify({
        theme: {
            dark: {
                primary: '#1a1c2a',
                secondary: '#616f80',
                accent: '#82B1FF',
                error: '#FF5252',
                info: '#2196F3',
                success: '#4CAF50',
                warning: '#FFC107',
            },
            
            
        
        },
    }),
    el: '#app',
    data:{
        menu:1
    }
});
export default new Vuetify({ 

});
