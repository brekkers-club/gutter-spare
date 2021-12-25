import { createStore } from "vuex";

interface VuexState {
  loggedIn: boolean;
}

const store = createStore({
  state(): VuexState {
    return {
      loggedIn: false,
    };
  },
  mutations: {
    login(state: VuexState) {
      state.loggedIn = true;
      console.log({ state });
    },
    logout(state: VuexState) {
      state.loggedIn = false;
    },
  },
});

export default store;
