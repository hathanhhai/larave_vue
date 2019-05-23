import Vue from 'vue';
import App from './App.vue';
// import Login from './Login'
import router from './routes/';
import {sync} from 'vuex-router-sync';
import store from './stores/store';
import Paginate from 'vuejs-paginate'
// import VueSocketio from 'vue-socket.io-extended';
// import io from 'socket.io-client';
import Loading from './components/Layouts/Loading'
 //const SocketInstance = socketio('http://35.190.163.213:3000/');
// Vue.use(VueSocketio, io('http://localhost:8005'));
Vue.component('Loading',Loading);
Vue.component('paginate', Paginate);
sync(store,router);



 new Vue({
    el: '#app_vue',
    router,
    store,
    components: {App},
    template: `<App></App>`,


});




