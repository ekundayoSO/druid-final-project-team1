
import consultationPic1 from '@/assets/20240425-103500-Druid-Oy-1613.jpg';

import React, { useEffect, useState } from 'react';
import { fetchPages } from '@/lib/api/drupalAPI';


const Consultation = () => {
  return (
    <>
    <div className='relative w-full overflow-auto min-h-screen bg-gray-400 m-0 p-0'>
      <div className='flex flex-col items-center justify-center h-full'>
        <div className='flex flex-col md:flex-row items-center justify-center w-full max-w-7xl mx-auto p-8'>
          <div className='flex flex-col items-start justify-center  md:w-1/2 mb-8 md:mb-0'>
            <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-left p-3 rounded-lg leading-tight mt-16 md:mt-24'>
            Tech­no­lo­gy <br/> con­sul­ting
            </h1>
            <p className='text-white mb-8 max-w-xl text-left'>
            Is your web service in need of a shake up, but you don’t know where to start or how to attack it? Join us on an adventure to explore your digital service, and we’ll work together to identify what you need to succeed. We’ll put our expertise to work and wow you with solutions. 
            </p>

            <div className='w-full md:w-1/2 flex items-center justify-center h-full'>
            <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Check out our services</button>
            </div>
          </div>
          <div className='w-full md:w-1/2 flex'>
            <img src={consultationPic1} alt="three people looking at a computer" className='w-full h-auto object-cover rounded-lg shadow-lg mt-24' />
          </div>
        </div>
        </div>
</div>
<div className="bg-gray-500 py-12 w-full flex justify-center  min-h-screen mx-auto items-center ">
  <div className="bg-gray-700 md:w-3/5 rounded-lg shadow-lg p-8">
    <h2 className="text-3xl font-bold text-white mb-4">Ma­gi­cal Sup­port: Your de­di­ca­ted team for main­te­nan­ce and growth</h2>
    <p className="text-white mb-8">
    We’ve run the Discovery Tour with some fascinating cases. Each case is unique, but we use the same finely tuned process – adjusting it to different purposes as needed. We report with an analysis of the current situation, then we add concrete development proposals and a preliminary cost estimate. We give clear pathways to make it easy to decide to upgrade an old service or create something new.

    One very cool thing about the Discovery Tour is that it allows very quick testing of new service concepts without risk. We have done proof of concept implementations with many customers.
      </p>
  </div>

      </div>
      <div className='relative w-full overflow-auto min-h-screen bg-gray-700 m-0 p-0 flex items-center justify-center'>
          <div className='flex w-full md:w-1/2 flex-col items-center justify-center h-full'>
        <h2 className="text-3xl md:text-4xl font-bold text-white text-center col-span-full my-20">
        Dis­co­ve­ry Tour gua­ran­tees a quick and risk-free start for a de­ve­lop­ment pro­ject.
          </h2>

          <div className="w-full md:w-3/4 p-6 bg-gray-500 rounded-lg shadow-lg hover:bg-gray-600 transition-colors mb-12">
  <h3 className="text-xl font-bold text-white mb-6">When to Take the Discovery Tour?</h3>
  <p className="text-gray-200">The Discovery Tour makes life easier and helps kick-start your development project, if:</p>
  <ul className="list-disc pl-5 text-white">
    <li>you lack technical know-how to evaluate alternatives and define the project requirements</li>
    <li>you are looking for fresh solutions to serve a changing customer base or for new customer needs</li>
    <li>staying on budget and on schedule is important and project management needs support</li>
    <li>your goal is to do the right things in the right way in one go.</li>
  </ul>
</div>

      </div>
      </div>



      </>

  );
};

export default Consultation;

