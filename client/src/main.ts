import { createApp } from 'vue'
import { createStore } from 'vuex'
import './index.css';
import App from './App.vue';
import router from './router';

interface VuexState {
  loggedIn: boolean,
}

const store = createStore({
  state (): VuexState {
    return {
      loggedIn: false,
    }
  },
  mutations: {
    login(state: VuexState) {
      state.loggedIn = true;
      console.log({ state });
    },
    logout(state: VuexState) {
     state.loggedIn = false;
    }
  }
});

createApp(App)
    .use(router)
    .use(store)
    .mount('#app');
