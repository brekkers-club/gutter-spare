import axios, { AxiosInstance } from "axios";
import useStore from "@/store";
import router from "@/router";

const http: AxiosInstance = axios.create({
  baseURL: "http://localhost:8888",
  headers: {
    "Content-type": "application/json",
  },
  withCredentials: true,
});

http.interceptors.response.use(
  function (response) {
    // Any status code that lie within the range of 2xx cause this function to trigger
    // Do something with response data
    return response;
  },
  function (error) {
    const store = useStore();

    if (error.response.status === 401) {
      store.isAuthenicated = false;
      store.redirectAfterLogin = router.currentRoute.value;
      router.push({ name: "Login" });
      return Promise.resolve();
    }
    return Promise.reject(error);
  }
);

export default http;
