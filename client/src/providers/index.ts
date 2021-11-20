import Auth, { AuthProvider } from './auth';

interface Providers {
  auth: AuthProvider,
}

const providers: Providers = {
  auth: Auth,
}

export default providers;
