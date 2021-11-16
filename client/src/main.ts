import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';
import './index.css';
import App from './App.vue';
import HelloWorld from './components/HelloWorld.vue';


const routes = [
    { path: '/', component: HelloWorld },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


createApp(App)
    .use(router)
    .mount('#app');
