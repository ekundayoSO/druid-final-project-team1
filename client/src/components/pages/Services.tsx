import React from 'react';
import servicesPic1 from '@/assets/arto-hymyilee-scaled.png';

const Services = () => {
  return (
    <>
    <div className='relative w-full overflow-auto min-h-screen bg-gray-700 m-0 p-0'>
      <div className='flex flex-col md:flex-row items-center justify-center h-full w-full min-h-screen'>
        <div className='flex flex-col items-start justify-center w-full md:w-1/2 h-full p-8'>
          <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-left p-3 rounded-lg leading-tight mt-16 md:mt-24'>
            Our ser­vi­ces.
          </h1>
          <p className='text-white mb-8 max-w-xl text-left'>
            We thrive on designing and implementing digital solutions that help our clients’ businesses win. We keep things on budget, on time and involve customers in development, so they get to enjoy the journey – and the results.
            <br />
            <br />
            Driven by passion, we develop high-performing, dependable web services tailored to our clients’ business goals. We excel at navigating technically intricate projects while upholding the highest standards of quality.
          </p>
          <div className='flex justify-center w-full'>
            <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Contact Us</button>
          </div>
        </div>
        <div className='w-full md:w-1/2 h-full bg-cover bg-center' style={{ backgroundImage: `url(${servicesPic1})`, minHeight: '100vh' }}>
        </div>
      </div>
    </div>
{/* Cards Section */}
<div className='w-full pt-32 mx-auto p-8 bg-gray-400 '>
<div className='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8'>
  {/* Card 1 */}
  <div className='bg-white rounded-lg shadow-lg overflow-hidden p-4'>
    <img src="https://via.placeholder.com/150" alt="Service 1" className='w-full h-48 object-cover mb-4' />
    <h3 className='text-xl font-semibold'>Service 1</h3>
    <p className='text-gray-700'>Description of service 1 goes here.</p>
  </div>
  {/* Card 2 */}
  <div className='bg-white rounded-lg shadow-lg overflow-hidden p-4'>
    <img src="https://via.placeholder.com/150" alt="Service 2" className='w-full h-48 object-cover mb-4' />
    <h3 className='text-xl font-semibold'>Service 2</h3>
    <p className='text-gray-700'>Description of service 2 goes here.</p>
  </div>
  {/* Card 3 */}
  <div className='bg-white rounded-lg shadow-lg overflow-hidden p-4'>
    <img src="https://via.placeholder.com/150" alt="Service 3" className='w-full h-48 object-cover mb-4' />
    <h3 className='text-xl font-semibold'>Service 3</h3>
    <p className='text-gray-700'>Description of service 3 goes here.</p>
  </div>
  {/* Card 4 */}
  <div className='bg-white rounded-lg shadow-lg overflow-hidden p-4'>
    <img src="https://via.placeholder.com/150" alt="Service 4" className='w-full h-48 object-cover mb-4' />
    <h3 className='text-xl font-semibold'>Service 4</h3>
    <p className='text-gray-700'>Description of service 4 goes here.</p>
  </div>
</div>
</div>
</>
  );
};

export default Services;
