import { createBrowserRouter } from 'react-router-dom';
import LandingPage from '@/components/pages/LandingPage';
import NoMatch from '@/components/pages/NoMatch';
import { AppLayout } from '@/components/layouts/AppLayout';
import Projects from './components/pages/Projects';
import Maintenance from './components/pages/Maintenance';
import Consultation from './components/pages/Consultation';
import Jobs from './components/pages/Job';

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
      {
        path: 'jobs',
        element: <Jobs />,
      },
    ],
  },
  {
    path: '*',
    element: <NoMatch />,
  },
]);
