import Vue from 'vue';
import Router from 'vue-router';
import UserPage from '../components/Pages/Users';
import Dashboard from '../components/Pages/index.vue';


Vue.use(Router);
const router = new Router({
    routes: [
        {
            path: '/',
            name: 'index',
            component: Dashboard,
            mode: 'history'

        } , {
            path: '/user',
            name: 'index',
            component: UserPage,
            mode: 'history'

        }
    ]
});


export default router;
