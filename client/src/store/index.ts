import { defineStore } from "pinia";
import { useAuth } from "@/composables";

export default (() => {
  const auth = useAuth();

  return defineStore("main", {
    state: () => {
      return {
        isAuthenicated: false,
        user: null,
        redirectAfterLogin: null,
      };
    },
    actions: {
      async login(credentials: any): Promise<any> {
        try {
          await auth.csrf();
          await auth.login(credentials);
          const { data: user } = await auth.user();
          this.user = user;
          this.isAuthenicated = true;
          return user;
        } catch (error: any) {
          throw error;
        }
      },
      async logout(): Promise<any> {
        try {
          await auth.logout();
          this.$reset();
        } catch (error) {
          throw error;
        }
      },
    },
  });
})();
