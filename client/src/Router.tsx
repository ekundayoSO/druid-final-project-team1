import { createBrowserRouter } from 'react-router-dom';
import LandingPage from '@/components/pages/LandingPage';
import NoMatch from '@/components/pages/NoMatch';
import { AppLayout } from '@/components/layouts/AppLayout';
import Projects from './components/pages/Projects';
import Maintenance from './components/pages/Maintenance';
import Consultation from './components/pages/Consultation';
import AboutUs from './components/pages/AboutUs';
import Blog from './components/pages/Blog';


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
        path: 'about-us',
        element: <AboutUs />,
      },
      {
        path: 'blog',
        element: <Blog />,
      },
    ],
  },
  {
    path: '*',
    element: <NoMatch />,
  },
]);
