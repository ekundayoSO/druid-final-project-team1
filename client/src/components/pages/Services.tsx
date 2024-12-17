
import servicesPic1 from '@/assets/arto-hymyilee-scaled.png';
import servicesIcon1 from '@/assets/jalleenmyytavat-palvelut.webp';
import servicesIcon2 from '@/assets/markkinoinnin-automaatiot.webp';
import servicesIcon3 from '@/assets/tietoturva-auditointi.webp';

const Services = () => {
  return (
    <>
    <div className='relative w-full overflow-auto min-h-screen bg-gray-700 m-0 p-0'>
      <div className='flex flex-col md:flex-row items-center justify-center h-full w-full min-h-screen'>
        <div className='flex flex-col items-start justify-center w-full md:w-1/2 h-full p-8'>
          <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-left p-3 rounded-lg leading-tight mt-16 md:mt-24'>
            Our Ser­vi­ces
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
<div className='w-full pt-32 pb-32 mx-auto p-8 bg-gray-400 '>
<div className='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8'>
  {/* Card 1 */}
  <div className='bg-white rounded-lg shadow-lg overflow-hidden p-4'>
    <img src="https://via.placeholder.com/150" alt="Service 1" className='w-full h-auto object-cover mb-4 p-2' />
    <h3 className='text-xl font-semibold text-center'>Service 1</h3>
    <p className='text-gray-700 text-center'>Description of service 1 goes here.</p>
    <div className='flex justify-center'>
      <button className="mt-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
        Read more
      </button>
    </div>
  </div>
  {/* Card 2 */}
  <div className='bg-white rounded-lg shadow-lg overflow-hidden p-4'>
    <img src="https://via.placeholder.com/150" alt="Service 2" className='w-full h-auto object-cover mb-4 p-2' />
    <h3 className='text-xl font-semibold text-center'>Service 2</h3>
    <p className='text-gray-700 text-center'>Description of service 2 goes here.</p>
    <div className='flex justify-center'>
      <button className="mt-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
        Read more
      </button>
    </div>
  </div>
  {/* Card 3 */}
  <div className='bg-white rounded-lg shadow-lg overflow-hidden p-4'>
    <img src="https://via.placeholder.com/150" alt="Service 3" className='w-full h-auto object-cover mb-4 p-2' />
    <h3 className='text-xl font-semibold text-center'>Service 3</h3>
    <p className='text-gray-700 text-center'>Description of service 3 goes here.</p>
    <div className='flex justify-center'>
      <button className="mt-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
        Read more
      </button>
    </div>
  </div>
  {/* Card 4 */}
  <div className='bg-white rounded-lg shadow-lg overflow-hidden p-4'>
    <img src="https://via.placeholder.com/150" alt="Service 4" className='w-full h-auto object-cover mb-4 p-2' />
    <h3 className='text-xl font-semibold text-center'>Service 4</h3>
    <p className='text-gray-700 text-center'>Description of service 4 goes here.</p>
    <div className='flex justify-center'>
      <button className="mt-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">
        Read more
      </button>
    </div>
  </div>
</div>
</div>
<div className='relative w-full overflow-auto min-h-screen bg-gray-900 m-0 p-0'>
      <div className='flex md:flex-row items-center justify-center h-full w-full min-h-screen'>
        <div className='flex flex-col items-start justify-center w-full md:w-3/4 h-full p-8'>
          <h1 className=' md:text-6xl italic text-white p-3 rounded-lg mt-16 '>
          “Druid’s app­roach per­fect­ly blen­ded am­bi­tion, hu­mor and a proac­ti­ve ‘get things do­ne’ mind­set. The work qua­li­ty is top-notch. The folks at Druid are app­roac­hab­le and plea­sant, and to­get­her, all of us wor­king on the pro­ject be­ca­me a team.”
          </h1>
          <p className='text-white mb-8 text-left'>
          – Pia Korpisaari, Product Owner at the Digital and Population Data Services Agency
          </p>
        </div>
      </div>
    </div>
    <div className='relative w-full overflow-auto min-h-screen bg-gray-700 m-0 p-0'>

    <h2 className="text-3xl md:text-4xl font-bold text-white text-center col-span-full mt-20 my-8">
    Druid is al­so your trus­ted part­ner in the fol­lo­wing web so­lu­tions
    </h2>
          <div className='flex flex-col items-center justify-center w-full '>
<div className='flex items-center'>
  <img src={servicesIcon1} alt="icon with a screen and two shopping bags" className='mr-8' />
  <p className='text-white mb-8 max-w-xl text-left mt-8'>We focus on enhancing your security, whether it’s for a new or existing Drupal site. We consider the security needs specific to your organization and its respective industry.
  </p>
</div>
<div className='flex items-center'>
  <img src={servicesIcon2} alt="icon with a cart and arrows" className='mr-8' />
  <p className='text-white mb-8 max-w-xl text-left mt-8'>
    In addition to our primary services, we provide Matomo Analytics packages for websites, cookie management via Cookiebot and an integrated approach to publishing your social media content using Taeggie. Furthermore, we offer agile and secure web hosting solutions. </p>
</div>
<div className='flex items-center'>
  <img src={servicesIcon3} alt="icon with a cog and megaphone" className='mr-8' />
  <p className='text-white mb-8 max-w-xl text-left mt-8'>Utilizing the user-friendly Mautic platform, we seamlessly blend your marketing strategy with your digital footprint, delivering precise, streamlined and impactful marketing. </p>
</div>
          </div>
          </div>
</>
  );
};

export default Services;
