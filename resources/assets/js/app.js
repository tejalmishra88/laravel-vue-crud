
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'

Vue.use(VueRouter)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const example1 = require('./components/ExampleComponent.vue');
const example2 = require('./components/ExampleComponent.vue');
const sample = require('./components/Samplecomponent.vue');
const routes = [
    {
        path:'/example',
        component: example1
    },
    {
        path:'/example2',
        component: example2
    },
    {
        path: '/sample',
        component: sample
    }
];
//Vue.component('example-component', require('./components/ExampleComponent.vue'));
const router = new VueRouter({
    routes
})

router.beforeEach((to,from,next)=> 
{console.log('frobnbnbnbnm=',from);
 console.log('to=',to);
next();

})
const app = new Vue({
    el: '#app',
    router,
    data:{
        
    }
});
