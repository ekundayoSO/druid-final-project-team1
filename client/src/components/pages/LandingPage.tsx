import { useNavigate } from 'react-router-dom';
import { useEffect, useState } from 'react';
import carousel1 from '@/assets/Tamro-carousel1.webp';

const LandingPage: React.FC = () => {
  const navigate = useNavigate();

  const carouselItems = [
    { src: carousel1, alt: "Digital Solutions" },
    { src: carousel1, alt: "Technology Services" },
    { src: carousel1, alt: "Business Solutions" },
    { src: carousel1, alt: "Cloud Services" },
    { src: carousel1, alt: "AI Solutions" },
  ];

  const newCarouselItems = [
    {
      src: carousel1,
      title: "Tam­ro",
      description: "Enriched product information, effortless content management and seamless integrations: MyTamro service channel and a new website."
    },
    {
      src: carousel1,
      title: "Ci­ty of Hel­sin­ki",
      description: "New universal Drupal platform and the revamp of Hel.fi web service – efficient and accessible content production."
    },
    {
      src: carousel1,
      title: "Veik­kaus",
      description: "The new content management system makes content management easier while preserving the stability of the old interface."
    },
  ];

  const [currentIndex, setCurrentIndex] = useState(0);

  const handleNext = () => {
    setCurrentIndex((prevIndex) => (prevIndex + 1) % newCarouselItems.length);
  };

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-800'>
      <div className='flex flex-col items-center justify-center min-h-screen'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-center p-3 rounded-lg leading-tight mt-16 md:mt-24'>
          Uncompromising<br /> and Uncomplicated<br />
          Digital Solutions 
        </h1>
        <p className='text-white mb-8'>We act as the interpreter between the customer's business and the world of technology.</p>
        
        <div className="relative w-full overflow-hidden">
          <div className="flex animate-carousel space-x-4">
            {carouselItems.concat(carouselItems).map((item, index) => (
              <div 
                key={index} 
                className="flex-shrink-0 w-1/5"
              >
                <div className="relative w-full h-48">
                  <img
                    src={item.src}
                    alt={item.alt}
                    className="w-full h-full object-cover shadow-xl rounded-lg transition-transform duration-300 hover:scale-105"
                  />
                </div>
              </div>
            ))}
          </div>
        </div>
        <h2 className="text-3xl md:text-4xl font-bold text-white text-center col-span-full my-8">
            Open sour­ce.<br />
            Open mind­set.
          </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto p-6">
          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Finland's finest</h3>
            <p className="text-gray-200">
              Our Drupal experts design, develop and customize even the most challenging projects. 
              We harness the potential of Drupal and open-source code.
            </p>
          </div>

          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Website solutions for large enterprises</h3>
            <p className="text-gray-200">
              We understand the challenges of large businesses and organizations and 
              specialize in expansive website and online service implementations.
            </p>
          </div>
        </div>
        <h2 className="text-3xl md:text-4xl font-bold text-white text-center col-span-full my-8">
        Our ex­per­ti­se in ser­vi­ce pac­ka­ges
          </h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto p-6">
          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Comprehensive web solutions and digital services</h3>
            <p className="text-gray-200">
              We design and build websites that seamlessly integrate into your business. We have implemented large websites, 
              self-service portals and online stores for major international companies, organizations, municipalities and cities.
            </p>
          </div>

          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Customized online stores</h3>
            <p className="text-gray-200">
              Ensure a competitive edge with a first-class customer and shopping experience in your online store. 
              We implement tailor-made online shops and booking systems where purchase funnels can be executed 
              product-specifically, and through which our clients sell both digital and physical products and services.
            </p>
          </div>

          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Drupal expert services</h3>
            <p className="text-gray-200">
              Drupal serves as a solution for complex and broad online implementations. We are renowned for our technical 
              expertise and delivery reliability as Drupal content management system experts. Projects proceed according 
              to plan and are completed on time. We actively participate in the Drupal and open-source communities and 
              promote our clients' interests in system development.
            </p>
          </div>

          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Drupal maintenance</h3>
            <p className="text-gray-200">
              Druid's Magical Support develops your online service in the long-term to meet today's user expectations 
              and requirements. Our designated maintenance team handles system updates, minor developments, customer 
              support and proactively develops your service with you. Our Drupal experts act as a reliable technology 
              partner in your digital challenges.
            </p>
          </div>
        </div>
        <h2 className="text-3xl md:text-4xl font-bold text-white text-center col-span-full my-8">
                    Com­mu­ni­ty
            for de­ve­lo­pers < br />
            by de­ve­lo­pers.
          </h2>
          <p className='text-white mb-8'>Get to know our culture and people</p>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto p-6">
          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Up-to-date legal knowledge</h3>
            <p className="text-gray-200">
              We’re well-versed in online service laws and regulations, guiding our clients through them with ease.
            </p>
          </div>

          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">360° ser­vi­ces</h3>
            <p className="text-gray-200">
              Top-tier technical expertise, work quality and dependable delivery times are at the core of our operations. In addition, we offer a wide range of development services, including analytics, marketing automation, and accessibility solutions.
            </p>
          </div>

          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Comp­re­hen­si­ve so­lu­tions</h3>
            <p className="text-gray-200">
              From design and content to technical implementation and maintenance, we do it all. In addition, we offer a diverse range of development services, such as analytics, marketing automation and accessibility services.
            </p>
          </div>

          <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-4">Glo­bal Dru­pal ad­vo­ca­te</h3>
            <p className="text-gray-200">
              We’re active members of the international Drupal community, contributing to Drupal’s development and training new talents in the field.
            </p>
          </div>
        </div>

        <div className="relative w-full flex justify-center items-center overflow-hidden rounded-lg my-16">
          <div className="flex w-2/3">
            <div className="w-1/2">
              <img
                src={newCarouselItems[currentIndex].src}
                alt={newCarouselItems[currentIndex].title}
                className="w-full h-full object-cover"
              />
            </div>
            <div className="w-1/2 flex flex-col justify-center p-8">
              <h2 className="text-3xl md:text-4xl font-bold text-white mb-4">
                {newCarouselItems[currentIndex].title}
              </h2>
              <p className="text-gray-200 mb-8">
                {newCarouselItems[currentIndex].description}
              </p>
              <button
                onClick={handleNext}
                className="absolute right-40 top-1/2 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full shadow-lg hover:bg-gray-200 transition-colors"
              >
                Next
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default LandingPage;