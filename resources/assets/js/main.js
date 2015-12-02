var Vue = require('vue');
var VueRouter = require('vue-router')
Vue.use(VueRouter)

// Define some components

import Home from './components/Home.vue';


var Dashboard = Vue.extend({
    template: '<p>This is Dashboard!</p>'
})

var Page = Vue.extend({
    template: '<p>This is Page!</p>'
})

var User = Vue.extend({
    template: '<p>This is User!</p>'
})


var App = Vue.extend({
})

var router = new VueRouter()

router.map({
    '/home': {
        component: Home
    },
    '/dashboard': {
        component: Dashboard
    },
    '/page': {
        component: Page
    },
    '/user': {
        component: User
    }
})

router.start(App, '#app')