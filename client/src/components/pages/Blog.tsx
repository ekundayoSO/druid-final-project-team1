import React from 'react';

const Blog = () => {
  return (
    <div className='relative w-full h-screen overflow-auto bg-gray-400 m-0 p-0'>
      <div className='flex flex-col items-center justify-center h-full'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-center p-3 rounded-lg leading-tight mt-16 md:mt-24'>
          Blogs
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

        <div className="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="https://via.placeholder.com/400x200" alt="Project Image" className="w-full h-48 object-cover" />
          <div className="p-6">
            <h2 className="text-2xl font-bold mb-2">Project Title</h2>
            <p className="text-gray-700">
              This is a brief description of the project. It highlights the key features and outcomes of the project.
            </p>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Blog;
