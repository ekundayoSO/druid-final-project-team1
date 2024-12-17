
import carousel1 from '@/assets/Tamro-carousel1.webp';

const Projects = () => {
  return (
    <div className='relative w-full overflow-auto bg-gray-400 m-0 p-0'>
      <div className='flex flex-col items-center justify-center h-full'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-center p-3 rounded-lg leading-tight mt-16 md:mt-24'>
          Cus­to­mer ca­ses
        </h1>
        <p className='text-white mb-8'>
          We have well over a hundred projects behind us. Take a look at these examples of our successful collaborations.
        </p>

        <div className="flex justify-between mb-8">
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 1</button>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 2</button>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 3</button>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 4</button>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 5</button>
        </div>

        {/* New Section 1 */}
        <div className="flex mb-16 mt-16 mx-12 justify-center">
          <div className="w-2/5">
            <img src={carousel1} alt="Carousel 1" className="w-full h-auto" />
          </div>
          <div className="w-2/5 flex flex-col justify-center p-10">
            <h2 className='text-3xl font-bold text-white'>Title for Section 1</h2>
            <p className='text-white mt-2'>
              This is a paragraph describing the content related to the first section.
            </p>
          </div>
        </div>

        {/* New Section 2 */}
        <div className="flex mb-16 mx-12 justify-center">
          <div className="w-2/5 flex flex-col justify-center pl-10">
            <h2 className='text-3xl font-bold text-white'>Title for Section 2</h2>
            <p className='text-white mt-2'>
              This is a paragraph describing the content related to the second section.
            </p>
          </div>
          <div className="w-2/5">
            <img src={carousel1} alt="Carousel 2" className="w-full h-auto" />
          </div>
        </div>
      </div>
    </div>
  );
};

export default Projects;
