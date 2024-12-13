import { createBrowserRouter } from 'react-router-dom';
import { AppLayout } from '@/components/layouts/AppLayout';
import LandingPage from '@/components/pages/LandingPage';
import NoMatch from '@/components/pages/NoMatch';
import Projects from '@/components/pages/Projects/Projects';
import Maintenance from '@/components/pages/Maintenance';
import Consultation from '@/components/pages/Consultation';
import AboutUs from '@/components/pages/AboutUs/AboutUs';
import Blog from '@/components/pages/Blogs/Blog';
import BlogPost from '@/components/pages/Blogs/BlogPost';
import Services from '@/components/pages/Services/Services';
import Contact from '@/components/pages/Contact';
import Careers from './components/pages/Careers/Careers';
import CareersPost from './components/pages/Careers/CareersPost';
import ProjectsPost from './components/pages/Projects/ProjectsPost';
import ServicesPost from './components/pages/Services/ServicesPost';
import AboutUsPost from './components/pages/AboutUs/AboutUsPost';

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
        path: 'projects/:id',
        element: <ProjectsPost />,
      },
      {
        path: 'services',
        element: <Services />,
      },
      {
        path: 'services/:id',
        element: <ServicesPost />,
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
        path: 'about-us/:id',
        element: <AboutUsPost />,
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
      {
        path: 'careers/:id',
        element: <CareersPost />,
      },
    ],
  },
  {
    path: '*',
    element: <NoMatch />,
  },
]);
