import { createBrowserRouter } from 'react-router-dom';
import { AppLayout } from '@/components/layouts/AppLayout';
import LandingPage from '@/components/pages/LandingPage';
import NoMatch from '@/components/pages/NoMatch';
import Projects from '@/components/pages/Projects';
import Maintenance from '@/components/pages/Maintenance';
import Consultation from '@/components/pages/Consultation';
import AboutUs from '@/components/pages/AboutUs';
import Blog from '@/components/pages/Blog/Blog';
import BlogPost from '@/components/pages/Blog/BlogPost';
import Services from '@/components/pages/Services';
import Contact from '@/components/pages/Contact';
import Careers from './components/pages/Career/Careers';

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
        path: 'services',
        element: <Services />,
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
      {
        path: 'blog/:id',
        element: <BlogPost />,
      },
      {
        path: 'contact',
        element: <Contact />,
      },
      {
        path: 'careers',
        element: <Careers />,
      },
    ],
  },
  {
    path: '*',
    element: <NoMatch />,
  },
]);
