
import { Link } from 'react-router-dom';
import { useEffect, useState } from 'react';
import axios from 'axios';
import { ConsultationItem} from '@/types/Consultation';

const Consultation = () => {
  const [consultation, setConsultation] = useState<ConsultationItem[]>([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/consultation`, {
          params: {
            include: 'field_consultation,field_consultation.field_add_image.field_media_image',
          },
        });
        console.log(response.data.data);

        setConsultation(response.data.data);
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
  if (consultation.length === 0) return <div>No services available</div>;


  // Get the first image URL from field_consultation
  const getHeaderImage = () => {
    if (!consultation[0]?.field_consultation) return null;
    
    const imageItem = consultation[0].field_consultation.find(
      item => item.type === 'paragraph--add_image' && 
      item.field_add_image?.[0]?.field_media_image?.[0]
    );

    return imageItem?.field_add_image?.[0]?.field_media_image?.[0]?.uri.url ? 
      `${drupalBaseUrl}${imageItem.field_add_image[0].field_media_image[0].uri.url}` 
      : null;
  };

  return (
    <>
    <div className='relative w-full overflow-auto min-h-screen bg-gray-400 dark:bg-gray-800 m-0 p-0'>
      <div className='flex flex-col items-center justify-center h-full'>
        <div className='flex flex-col md:flex-row items-center justify-center w-full max-w-7xl mx-auto p-8'>
          <div className='flex flex-col items-start justify-center  md:w-1/2 mb-8 md:mb-0'>
            <div className="[hyphens:none] [word-break:normal]">
              <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold dark:text-white text-left p-3 rounded-lg leading-tight mt-16 md:mt-24'>
                {isLoading ? (
                  'Loading...'
                ) : (
                  consultation[0]?.field_consultation?.find(
                    item => item.type === 'paragraph--topic' && 
                    item.field_short_heading?.[0]?.value
                  )?.field_short_heading?.[0]?.value || 'title not found'
                )}
              </h1>
            </div>
            <p className='dark:text-white mb-8 max-w-xl text-left'>
            Is your web service in need of a shake up, but you don’t know where to start or how to attack it? Join us on an adventure to explore your digital service, and we’ll work together to identify what you need to succeed. We’ll put our expertise to work and wow you with solutions. 
            </p>

            <div className='w-full md:w-1/2 flex items-center justify-center h-full'>
            <Link to="/services">
              <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Check out our services</button>
            </Link>
            </div>
          </div>
          <div className='w-full md:w-1/2 flex'>
            {isLoading ? (
              <div className="w-full h-auto flex items-center justify-center">
                Loading...
              </div>
            ) : (
              <img 
                src={getHeaderImage() || ''} 
                alt="Consultation header image" 
                className='w-full h-auto object-cover rounded-lg shadow-lg mt-24'
              />
            )}
          </div>
        </div>
        </div>
</div>
<div className="bg-gray-300 dark:bg-gray-500 py-12 w-full flex justify-center  min-h-screen mx-auto items-center ">
  <div className="bg-gray-100 dark:bg-gray-700 md:w-3/5 rounded-lg shadow-lg p-8">
    <h2 className="text-3xl font-bold dark:text-white mb-4">Ma­gi­cal Sup­port: Your de­di­ca­ted team for main­te­nan­ce and growth</h2>
    <p className="dark:text-white mb-8">
    We’ve run the Discovery Tour with some fascinating cases. Each case is unique, but we use the same finely tuned process – adjusting it to different purposes as needed. We report with an analysis of the current situation, then we add concrete development proposals and a preliminary cost estimate. We give clear pathways to make it easy to decide to upgrade an old service or create something new.

    One very cool thing about the Discovery Tour is that it allows very quick testing of new service concepts without risk. We have done proof of concept implementations with many customers.
      </p>
  </div>

      </div>
      <div className='relative w-full overflow-auto min-h-screen bg-gray-200 dark:bg-gray-700 m-0 p-0 flex items-center justify-center'>
          <div className='flex w-full md:w-1/2 flex-col items-center justify-center h-full'>
        <h2 className="text-3xl md:text-4xl font-bold dark:text-white text-center col-span-full my-20">
        Dis­co­ve­ry Tour gua­ran­tees a quick and risk-free start for a de­ve­lop­ment pro­ject.
          </h2>

          <div className="w-full md:w-3/4 p-6 dark:bg-gray-500 rounded-lg shadow-lg mb-12">
  <h3 className="text-xl font-bold dark:text-white mb-6">
  {isLoading ? (
    'Loading...'
  ) : (
    (() => {
      const items = consultation[0]?.field_consultation || [];
      const firstTopicIndex = items.findIndex(
        item => item.type === 'paragraph--topic' && item.field_short_heading?.[0]?.value
      );
      const secondTopic = items.slice(firstTopicIndex + 1).find(
        item => item.type === 'paragraph--topic' && item.field_short_heading?.[0]?.value
      );
      return secondTopic?.field_short_heading?.[0]?.value || 'Title not found';
    })()
  )}
</h3>
  <p className="dark:text-gray-200">The Discovery Tour makes life easier and helps kick-start your development project, if:</p>
  <ul className="list-disc pl-5 dark:text-white">
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

