import { Outlet, useLocation } from 'react-router-dom';
import { Footer } from './Footer';
import NavMenu from './NavMenu';
import BackToTopButton from './BackToTopButton';

interface Route {
  path: string;
  name: string;
}

const routes: Route[] = [
  { path: '/', name: 'Home' },
  { path: '/projects', name: 'Projects' },
  { path: '/services', name: 'Services' },
  { path: '/maintenance', name: 'Maintenance' },
  { path: '/consultation', name: 'Consultation' },
  { path: '/about-us', name: 'About Us' },
  { path: '/blog', name: 'Blog' },
  { path: '/contact', name: 'Contact' },
  { path: '/careers', name: 'Careers' },
];

export function AppLayout() {
  const location = useLocation();
  const isHomePage = location.pathname === '/';

  return (
    <div className="min-h-screen flex flex-col">
      <NavMenu routes={routes} />
      <main className='flex-grow flex flex-col'>
        <div className='px-4 md:px-0'>
          <Outlet />
        </div>
      </main>
      {location.pathname !== '/' && (
        <div className='container px-4 md:px-8'>
        </div>
      )}
      <BackToTopButton />
      <Footer />
    </div>
  );
}
