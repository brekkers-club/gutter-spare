import http from '@/http';

interface Credentials {
  username: string,
  password: string,
}

export interface AuthProvider {
  csrf(): Promise<any>,
  login(credentials: Credentials): Promise<any>,
}

class Auth {
  csrf(): Promise<any> {
    return http.get('/sanctum/csrf-cookie');
  }

  login(credentials: Credentials): Promise<any> {
    return http.post('/login', credentials)
  }
}

export default new Auth();
