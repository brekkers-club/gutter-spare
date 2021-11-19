import Auth from './auth';

export interface AuthProvider {
  csrf(): Promise<any>,
}

interface Providers {
  auth: AuthProvider,
}

const providers: Providers = {
  auth: Auth,
}

export default providers;
