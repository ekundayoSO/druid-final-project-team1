import { createBrowserRouter } from 'react-router-dom';
import LandingPage from '@/components/pages/LandingPage';
import NoMatch from '@/components/pages/NoMatch';
import { AppLayout } from '@/components/layouts/AppLayout';

export const router = createBrowserRouter([
  {
    path: '/',
    element: <AppLayout />,
    children: [
      {
        path: '',
        element: <LandingPage />,
      },
      {
        path: 'projects',
        element: <Projects />,
      },
      {
        path: 'maintenance',
        element: <Maintenance />,
      },
      {
        path: 'consultation',
        element: <Consultation />,
      },
    ],
  },
  {
    path: '*',
    element: <NoMatch />,
  },
]);
