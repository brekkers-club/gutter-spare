import http from '@/http';

export interface AuthProvider {
  csrf(): Promise<any>,
}

class Auth implements AuthProvider {
  csrf(): Promise<any> {
    return http.get('/sanctum/csrf-cookie');
  }
}

export default new Auth();
