import http from '@/http';


class Auth {
  csrf(): Promise<any> {
    return http.get('/sanctum/csrf-cookie');
  }
}

export default new Auth();
