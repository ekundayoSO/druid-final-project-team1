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

  const [currentIndex, setCurrentIndex] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentIndex((prevIndex) => 
        prevIndex === carouselItems.length - 1 ? 0 : prevIndex + 1
      );
    }, 3000);

    return () => clearInterval(timer);
  }, [carouselItems.length]);

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-800'>
      <div className='flex flex-col items-center justify-center min-h-screen'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-center p-3 rounded-lg leading-tight mt-16 md:mt-24'>
          Uncompromising<br /> and Uncomplicated<br />
          Digital Solutions 
        </h1>
        <p className='text-white mb-8'>We act as the interpreter between the customer's business and the world of technology.</p>
        
        <div className="relative w-full max-w-7xl mx-auto overflow-hidden px-0">
          <div className="flex animate-carousel">
            {carouselItems.map((item, index) => (
              <div 
                key={index} 
                className="w-1/5 flex-shrink-0 px-2"
              >
                <div className="relative w-64 mx-auto">
                  <img
                    src={item.src}
                    alt={item.alt}
                    className="w-full h-48 object-cover shadow-xl rounded-lg transition-transform duration-300 hover:scale-105"
                  />
                </div>
              </div>
            ))}
          </div>
          
          <div className="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2">
            {carouselItems.map((_, index) => (
              <button
                key={index}
                className={`w-2 h-2 rounded-full transition-colors ${
                  index === currentIndex ? 'bg-white' : 'bg-white/50'
                }`}
                onClick={() => setCurrentIndex(index)}
              />
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
      </div>
    </div>
  );
};

export default LandingPage;