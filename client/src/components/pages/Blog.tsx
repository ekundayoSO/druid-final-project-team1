import React, { useState } from 'react';

const Blog = () => {
  const cards = [
    {
      title: "Project Title 1",
      description: "This is a brief description of the project. It highlights the key features and outcomes of the project.",
      image: "https://via.placeholder.com/400x300"
    },
    {
      title: "Project Title 2",
      description: "This is a brief description of the project. It highlights the key features and outcomes of the project.",
      image: "https://via.placeholder.com/400x300"
    },
    {
      title: "Project Title 3",
      description: "This is a brief description of the project. It highlights the key features and outcomes of the project.",
      image: "https://via.placeholder.com/400x300"
    },
    {
      title: "Project Title 4",
      description: "This is a brief description of the project. It highlights the key features and outcomes of the project.",
      image: "https://via.placeholder.com/400x300"
    },
    {
      title: "Project Title 5",
      description: "This is a brief description of the project. It highlights the key features and outcomes of the project.",
      image: "https://via.placeholder.com/400x300"
    },
    {
      title: "Project Title 6",
      description: "This is a brief description of the project. It highlights the key features and outcomes of the project.",
      image: "https://via.placeholder.com/400x300"
    },
    {
      title: "Project Title 7",
      description: "This is a brief description of the project. It highlights the key features and outcomes of the project.",
      image: "https://via.placeholder.com/400x300"
    },
    {
      title: "Project Title 8",
      description: "This is a brief description of the project. It highlights the key features and outcomes of the project.",
      image: "https://via.placeholder.com/400x300"
    },
  ];

  const [currentPage, setCurrentPage] = useState(1);
  const cardsPerPage = 4;

  // Calculate the indices of the cards to display on the current page
  const indexOfLastCard = currentPage * cardsPerPage;
  const indexOfFirstCard = indexOfLastCard - cardsPerPage;
  const currentCards = cards.slice(indexOfFirstCard, indexOfLastCard);

  const totalPages = Math.ceil(cards.length / cardsPerPage);

  const handlePrevious = () => {
    setCurrentPage((prevPage) => (prevPage > 1 ? prevPage - 1 : prevPage));
  };

  const handleNext = () => {
    setCurrentPage((prevPage) => (prevPage < totalPages ? prevPage + 1 : prevPage));
  };

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-400 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-center p-3 rounded-lg leading-tight mt-16 md:mt-24'>
          Blogs
        </h1>
        <p className='text-white mb-8'>
          Writings on and off topic – about our everyday life, culture, and the world of software development
        </p>

        <div className="flex justify-between mb-8">
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 1</button>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 2</button>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 3</button>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 4</button>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Button 5</button>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
          {currentCards.map((card, index) => (
            <div key={index} className="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
              <img src={card.image} alt={card.title} className="w-full h-64 object-cover" />
              <div className="p-6">
                <h2 className="text-2xl font-bold mb-2">{card.title}</h2>
                <p className="text-gray-700">
                  {card.description}
                </p>
              </div>
            </div>
          ))}
        </div>

        <div className="flex justify-center mb-8">
          <button
            onClick={handlePrevious}
            className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2"
            disabled={currentPage === 1}
          >
            Previous
          </button>
          <button
            onClick={handleNext}
            className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2"
            disabled={currentPage === totalPages}
          >
            Next
          </button>
        </div>
      </div>
    </div>
  );
};

export default Blog;
