import { defineStore } from "pinia";

export default defineStore("main", {
  state: () => {
    return {
      user: null,
    };
  },
});
