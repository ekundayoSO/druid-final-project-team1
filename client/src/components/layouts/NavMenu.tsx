import { useState } from 'react';
import { useMatch, useNavigate } from 'react-router-dom';
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

  const handleNavigation = (path: string) => {
    navigate(path);
    window.scrollTo(0, 0);
    setIsOpen(false);
  };

  return (
    <nav className='fixed top-0 left-0 w-full z-20 flex justify-between items-center p-4 text-white'>
      <div className='flex items-center'>
        <a href='/' className='flex items-center'>
          <Avatar className='filter dark:invert'>
            <AvatarImage src={Logo} />
            <AvatarFallback>WB</AvatarFallback>
          </Avatar>
          <span className='ml-2 text-2xl font-medium text-white'>Druid</span>
        </a>
      </div>
      <div className='flex items-center'>
        <div className='flex items-center relative'>
          <button onClick={() => setIsOpen(!isOpen)} className='mr-2'>
            <Menu color='currentColor' size={32} />
          </button>
          {isOpen && (
            <div className='absolute top-12 right-0 p-4 bg-white dark:bg-gray-900 text-gray-800 dark:text-white rounded-lg shadow-lg z-10 w-48'>
              {routes.map(({ path, name }, index) => (
                <button
                  key={path}
                  onClick={() => handleNavigation(path)}
                  className={`block mt-4 ${
                    matches[index] ? 'text-cyan-500 border-b-2 border-cyan-500' : ''
                  } text-black dark:text-white`}
                >
                  {name}
                </button>
              ))}
              <div className='flex justify-end mt-2'>
                <ModeToggle />
              </div>
            </div>
          )}
        </div>
      </div>
    </nav>
  );
};

export default NavMenu;
