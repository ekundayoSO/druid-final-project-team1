import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import { Service } from '@/types/Services';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import servicesPic1 from '@/assets/20240425-095937-Druid-Oy-0280.webp';
import servicesIcon1 from '@/assets/jalleenmyytavat-palvelut.webp';
import servicesIcon2 from '@/assets/markkinoinnin-automaatiot.webp';
import servicesIcon3 from '@/assets/tietoturva-auditointi.webp';

const Services = () => {
  const [services, setServices] = useState<Service[]>([]);
  const [isLoading, setIsLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);

  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/services_new`);
  
        setServices(response.data.data);
        setIsLoading(false);
      } catch (err) {
        setError('An error occurred while fetching the data');
        setIsLoading(false);
        console.error('Fetch error:', err);
      }
    };

    fetchData();
  }, []);

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;
  if (services.length === 0) return <div>No services available</div>;

  return (
    <>
      <div className='relative w-full overflow-auto min-h-screen bg-gray-100 dark:bg-gray-700 m-0 p-0'>
        <div className='flex flex-col md:flex-row items-center justify-center h-full w-full min-h-screen'>
          <div className='flex flex-col items-center justify-center w-full md:w-1/2 h-full p-8'>
            <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold dark:text-white text-center p-3 rounded-lg leading-tight mt-16 md:mt-24'>
              Our Ser­vi­ces
            </h1>
            <p className='dark:text-white mb-8 max-w-xl text-center'>
              We thrive on designing and implementing digital solutions that help our clients’ businesses win. We keep things on budget, on time and involve customers in development, so they get to enjoy the journey – and the results.
              <br />
              <br />
              Driven by passion, we develop high-performing, dependable web services tailored to our clients’ business goals. We excel at navigating technically intricate projects while upholding the highest standards of quality.
            </p>
            <div className='flex justify-center w-full'>
              <Link to="/contact" className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Contact Us</Link>
            </div>
          </div>
          <div className='w-full md:w-1/2 h-full bg-cover bg-center' style={{ backgroundImage: `url(${servicesPic1})`, minHeight: '100vh' }}>
          </div>
        </div>

        <div className='w-full pt-32 pb-32 mx-auto p-8 bg-gray-400 min-h-screen min-h-screen '>
<div className='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8'>
          {services.map((service) => {
            const { id, field_service_card_description, field_service_card_title } = service;
            return (
              <Card key={id} className="flex-1 mx-2 dark:bg-gray-700">
                <CardHeader className="flex flex-col h-full">
                  <CardContent className="flex flex-col justify-between h-full">
                    <div>
                      <CardTitle className="text-lg font-bold mb-4" style={{ height: '50px' }}>
                        {field_service_card_title?.value || 'Title Not Available'}
                      </CardTitle>
                      <p
                        className="text-sm pt-5"
                        dangerouslySetInnerHTML={{
                          __html: field_service_card_description?.value || 'Long Description Not Available',
                        }}
                      />
                    </div>
                    <Link to={`/services/${id}`}>
                      <p className="mr-1 text-red-500 dark:text-gray-300 mt-5 self-end">&rarr; Read more</p>
                    </Link>
                  </CardContent>
                </CardHeader>
              </Card>
            );
          })}
        </div>
      </div>
      </div>
      <div className='relative w-full overflow-auto min-h-screen dark:bg-gray-900 m-0 p-0'>
      <div className='flex md:flex-row items-center justify-center h-full w-full min-h-screen'>
        <div className='flex flex-col items-start justify-center w-full md:w-3/4 h-full p-8'>
          <h1 className=' md:text-6xl italic dark:text-white p-3 rounded-lg mt-16 '>
          “Druid’s app­roach per­fect­ly blen­ded am­bi­tion, hu­mor and a proac­ti­ve ‘get things do­ne’ mind­set. The work qua­li­ty is top-notch. The folks at Druid are app­roac­hab­le and plea­sant, and to­get­her, all of us wor­king on the pro­ject be­ca­me a team.”
          </h1>
          <p className='dark:text-white mb-8 text-left'>
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