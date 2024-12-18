import { useState } from 'react';
import { useMatch, useNavigate, useLocation } from 'react-router-dom';
import { Menu } from 'lucide-react';
import Logo from '@/assets/druid.svg';
import { Avatar, AvatarFallback, AvatarImage } from '../ui/avatar';
import { ModeToggle } from '../custom/themes/mode-toggle';

interface Route {
  path: string;
  name: string;
}

interface NavMenuProps {
  routes: Route[];
}

const NavMenu: React.FC<NavMenuProps> = ({ routes }) => {
  const [isOpen, setIsOpen] = useState(false);
  const matches = routes.map((route) => useMatch(route.path));
  const navigate = useNavigate();
  const location = useLocation(); // Add this
  const isLandingPage = location.pathname === '/'; // Add this

  const handleNavigation = (path: string) => {
    navigate(path);
    window.scrollTo(0, 0);
    setIsOpen(false);
  };

  return (
    <nav className={`fixed top-0 left-0 w-full z-20 flex justify-between items-center p-4 
      ${isLandingPage ? 'text-gray-200' : 'dark:text-gray-200'}`}>
      <div className='flex items-center'>
        <a href='/' className='flex items-center'>
          <Avatar>
            <AvatarImage src={Logo} />
            <AvatarFallback>Druid</AvatarFallback>
          </Avatar>
          <span className={`ml-2 text-2xl font-medium 
            ${isLandingPage ? 'text-gray-200' : 'dark:text-gray-200'}`}>
            Druid
          </span>
        </a>
      </div>
      <div className='flex items-center'>
        <div className='flex items-center relative'>
          <button onClick={() => setIsOpen(!isOpen)} className='mr-2'>
            <Menu color={isLandingPage ? 'white' : 'currentColor'} size={32} />
          </button>
          {isOpen && (
            <div className={`absolute top-12 right-0 p-4 rounded-lg shadow-lg z-10 w-48
              ${isLandingPage ? 'bg-gray-900 text-white' : 'bg-white dark:bg-gray-900 text-gray-800 dark:text-white'}`}>
              {routes.map(({ path, name }, index) => (
                <button
                  key={path}
                  onClick={() => handleNavigation(path)}
                  className={`block mt-4 ${
                    matches[index] ? 'text-red-500 border-b-2 border-red-500' : ''
                  } ${isLandingPage ? 'text-white' : 'text-black dark:text-white'}`}
                >
                  {name}
                </button>
              ))}
              {!isLandingPage && (
                <div className='flex justify-end mt-2'>
                  <ModeToggle />
                </div>
              )}
            </div>
          )}
        </div>
      </div>
    </nav>
  );
};

export default NavMenu;
