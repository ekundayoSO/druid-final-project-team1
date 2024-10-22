import { useNavigate } from 'react-router-dom';

const LandingPage: React.FC = () => {
  const navigate = useNavigate();

  return (
    <div className='relative w-full min-h-screen overflow-auto'>
      <div className='absolute inset-0 flex flex-col items-center justify-center z-10 '>
        <h1 className='text-4xl sm:text-5xl md:text-6xl font-bold text-white text-center p-3 rounded-lg dark:text-black leading-tight'>
          Druid Final Project
        </h1>
      </div>
    </div>
  );
};

export default LandingPage;
