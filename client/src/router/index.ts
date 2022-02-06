import { createRouter, createWebHistory } from "vue-router";
import useStore from "@/store";
import Home from "@/views/Home.vue";
import Login from "@/views/Login.vue";

const routes = [
  { path: "/", component: Home, name: "Home" },
  { path: "/login", component: Login, name: "Login" },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  const store = useStore();

  if (to.name !== "Login" && !store.isAuthenicated) {
    next({ name: "Login" });
  } else {
    next();
  }
});

export default router;
