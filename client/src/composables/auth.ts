import http from "@/http";

interface Credentials {
  email: string;
  password: string;
}

export interface AuthComposable {
  csrf(): Promise<any>;
  login(credentials: Credentials): Promise<any>;
  logout(): Promise<any>;
  user(): Promise<any>;
}

export default function useAuth(): AuthComposable {
  return {
    csrf: (): Promise<any> => http.get("/sanctum/csrf-cookie"),
    login: (credentials: Credentials): Promise<any> =>
      http.post("/login", credentials),
    logout: (): Promise<any> => http.post("/logout"),
    user: (): Promise<any> => http.get("/api/v1/user"),
  };
}
