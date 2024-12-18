import { useNavigate } from 'react-router-dom';
import { useState } from 'react';
import carousel1 from '@/assets/Tamro-carousel1.webp';
import carousel2 from '@/assets/Tamro-carousel2.webp';
import carousel3 from '@/assets/Tamro-carousel3.webp';

const LandingPage: React.FC = () => {
  const navigate = useNavigate();

  const carouselItems = [
    { 
      src: carousel1, 
      alt: "Tamro",
      link: "/projects/82f80501-f6ef-46ec-afad-6c88ff644bc8" 
    },
    { 
      src: carousel2, 
      alt: "Taitotalo",
      link: "/projects/28c672e2-52bf-4793-b79d-0800ba96ddc2"
    },
    { src: carousel3, alt: "Veikkaus",
      link: "/projects/684d8c82-7d1d-4e3f-bad2-97eac8861a6b" },
    { src: carousel1, alt: "Tamro" },
    { src: carousel1, alt: "Tamro" },
  ];

  const newCarouselItems = [
    {
      src: carousel1,
      title: "Tam­ro",
      description: "Enriched product information, effortless content management and seamless integrations: MyTamro service channel and a new website.",
      link: "/projects/82f80501-f6ef-46ec-afad-6c88ff644bc8"
    },
    {
      src: carousel2,
      title: "Tai­to­ta­lo",
      description: "A modern and search engine-friendly website implemented using agile methods.",
      link: "/projects/28c672e2-52bf-4793-b79d-0800ba96ddc2"
    },
    {
      src: carousel3,
      title: "Veik­kaus",
      description: "The new content management system makes content management easier while preserving the stability of the old interface.",
      link: "/projects/684d8c82-7d1d-4e3f-bad2-97eac8861a6b"
    }
  ];

  const [currentIndex, setCurrentIndex] = useState(0);

  const handleNext = () => {
    setCurrentIndex((prevIndex) => (prevIndex + 1) % newCarouselItems.length);
  };

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-800'>
      <div className='flex flex-col items-center justify-center min-h-screen bgGradient'>
        <h1 className='max-w-3xl text-5xl sm:text-6xl md:text-7xl font-bold text-white text-center p-3 rounded-lg leading-tight mt-16 md:mt-24'>
          Uncompromising<br /> and Uncomplicated<br />
          Digital Solutions 
        </h1>
        <p className='text-white mb-8'>We act as the interpreter between the customer's business and the world of technology.</p>
        
        <div className="relative w-full overflow-hidden py-4">
          <div className="flex animate-carousel gap-0.5">
            {carouselItems.concat(carouselItems.slice(0, 2)).map((item, index) => (
              <div 
                key={index} 
                className="flex-shrink-0 w-1/3 group flex justify-center"
                onClick={() => item.link && navigate(item.link)}
                style={{ cursor: item.link ? 'pointer' : 'default' }}
              >
                <div className="w-auto h-[320px] shadow-xl rounded-[20px] transition-all duration-300 hover:shadow-none brightness-75 contrast-125 hover:brightness-100 hover:contrast-100">
                  <img
                    src={item.src}
                    alt={item.alt}
                    className="w-full h-full object-contain rounded-lg transition-transform duration-300 transform group-hover:scale-105"
                  />
                </div>
              </div>
            ))}
          </div>
        </div>
      

        <div className='mt-24 mb-12 flex items-center justify-center'>
          <div className='w-full'>
            <h2 className="text-4xl sm:text-5xl md:text-6xl font-bold text-white text-center col-span-full mb-12">
              Open sour­ce.<br />
              Open mind­set.
            </h2>
            
            <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto p-6">
              <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors h-[240px] flex flex-col ">
                <h3 className="text-xl font-bold text-white mb-6 text-center  ">Finland's finest</h3>
                <p className="text-gray-200">
                  Our Drupal experts design, develop and customize even the most challenging projects. 
                  We harness the potential of Drupal and open-source code.
                </p>
              </div>
        
              <div className="bg-gray-700 p-6 rounded-lg shadow-lg hover:bg-gray-600 transition-colors h-[240px] flex flex-col ">
                <h3 className="text-xl font-bold text-white mb-6 text-center  ">Website solutions for large enterprises</h3>
                <p className="text-gray-200">
                  We understand the challenges of large businesses and organizations and 
                  specialize in expansive website and online service implementations.
                </p>
              </div>
            </div>
     
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
        <h2 className="text-3xl md:text-5xl font-bold text-white text-center col-span-full my-12">
                    Com­mu­ni­ty
            for de­ve­lo­pers < br />
            by de­ve­lo­pers.
          </h2>
          <p className='text-3xl md:text-3xl italic text-white mb-12'>Get to know our culture and people</p>
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

        <div className="relative my-20 w-full flex justify-center items-center overflow-hidden rounded-lg my-16">
          <div 
            className="flex w-2/3 cursor-pointer"
            onClick={() => navigate(newCarouselItems[currentIndex].link)}
          >
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
            </div>
          </div>
          <button
            onClick={handleNext}
            className="absolute right-40 top-1/2 transform -translate-y-1/2 bg-white text-gray-800 p-2 rounded-full shadow-lg hover:bg-gray-200 transition-colors"
          >
            Next
          </button>
        </div>
      </div>
    </div>
  );
};

export default LandingPage;