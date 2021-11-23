import http from '@/http';

interface Credentials {
  email: string,
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

  login(credentials: Credentials, token: string): Promise<any> {
    return http.post('/login', credentials, {
      headers: {
        'X-XSRF-TOKEN': token,
      }
    })
  }
}

export default new Auth();
