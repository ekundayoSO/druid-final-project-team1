import React, { useEffect, useState } from 'react';
import { fetchPages } from '@/lib/api/drupalAPI';
import aboutPic1 from '@/assets/20240425-103217-Druid-Oy-1026-2.jpg';
import aboutPic2 from '@/assets/DruidToimisto2020-1157-scaled-e1607966740706.webp';
import aboutPic3 from '@/assets/original.png';
import aboutPic4 from '@/assets/DruidMokki2020-1041-1-scaled2.webp';
import axios from 'axios';

const AboutUs: React.FC = () => {
  const [employees, setEmployees] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/meet_the_druids`, {
          params: {
            include: 'field_people,field_people.field_service_image.field_media_image',
          },
        });
        console.log(response.data.data);

        setEmployees(response.data.data);
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
  if (employees.length === 0) return <div>No services available</div>;

  return (
    <>
    <div className='relative w-full overflow-auto min-h-screen bg-gray-400 m-0 p-0'>
      <div className='flex flex-col items-center justify-center h-full'>
        <div className='flex flex-col md:flex-row items-center justify-center w-full max-w-7xl mx-auto p-8'>
          <div className='flex flex-col items-start justify-center w-full md:w-1/2 mb-8 md:mb-0'>
            <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-left p-3 rounded-lg leading-tight mt-16 md:mt-24'>
              Open sour­ce. <br/>Open at­ti­tu­de.
            </h1>
            <p className='text-white mb-8 max-w-xl text-left'>
              We are the uncompromising and uncomplicated software house. We design and implement high-quality digital solutions with passion and technological expertise.
            </p>

            <div className='w-full md:w-1/2 flex items-center justify-center h-full'>
            <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Check out our services</button>
            </div>
          </div>
          <div className='w-full md:w-1/2 flex'>
            <img src={aboutPic1} alt="three people looking at a computer" className='w-full h-auto object-cover rounded-lg shadow-lg mt-24' />
          </div>
        </div>
        </div>
</div>
          <div className='relative w-full overflow-auto min-h-screen bg-gray-700 m-0 p-0'>
          <div className='flex flex-col items-center justify-center h-full'>
        <h2 className="text-3xl md:text-4xl font-bold text-white text-center col-span-full mt-20">
          A mo­re func­tio­nal world, from one li­ne of co­de to the next
          </h2>

                  {/* New Section 1 */}
        <div className="flex mx-12 justify-center">
          <div className="w-2/5">
            <img src={aboutPic2} alt="two men infront of a computer" className='w-full h-auto object-cover rounded-lg shadow-lg mt-24' />
          </div>
          <div className="w-2/5 flex flex-col justify-center p-10">
            <h2 className='text-3xl font-bold text-white'>Title for Section 1</h2>
            <p className='text-white mt-2'>
              This is a paragraph describing the content related to the first section.
            </p>
          </div>
        </div>

        {/* New Section 2 */}
        <div className="flex mb-16 mx-12 justify-center">
          <div className="w-2/5 flex flex-col justify-center pl-10">
            <h2 className='text-3xl font-bold text-white'>Title for Section 2</h2>
            <p className='text-white mt-2'>
              This is a paragraph describing the content related to the second section.
            </p>
          </div>
          <div className="w-2/5">
            <img src={aboutPic3} alt="five men infront of a forest" className='w-full h-auto object-cover rounded-lg shadow-lg mt-24' />
          </div>
        </div>
      </div>
              {/* New Section 3 */}
      <div className="flex flex-col justify-center items-center w-full min-h-screen mx-auto p-8 bg-black" style={{ backgroundImage: `url(${aboutPic4})`, backgroundSize: 'cover', backgroundPosition: 'center', backgroundColor: 'rgba(0, 0, 0, 0.7)' }}>
        <h2 className="text-3xl md:text-4xl font-bold text-white text-center my-8">
          Why Druid?
        </h2>
        <div className="flex justify-center gap-8 w-full">
          <div className="w-1/4 p-6 bg-gray-700 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-6">Card Title 1</h3>
            <p className="text-gray-200">This is a longer description for the first card, providing more details and insights.</p>
          </div>
          <div className="w-1/4 p-6 bg-gray-700 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-6">Card Title 2</h3>
            <p className="text-gray-200">This is a longer description for the second card, providing more details and insights.</p>
          </div>
          <div className="w-1/4 p-6 bg-gray-700 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-6">Card Title 3</h3>
            <p className="text-gray-200">This is a longer description for the third card, providing more details and insights.</p>
          </div>
          <div className="w-1/4 p-6 bg-gray-700 rounded-lg shadow-lg hover:bg-gray-600 transition-colors">
            <h3 className="text-xl font-bold text-white mb-6">Card Title 4</h3>
            <p className="text-gray-200">This is a longer description for the fourth card, providing more details and insights.</p>
          </div>
        </div>
      </div>
      </div>
      <div className="flex flex-col justify-center items-center w-full min-h-screen mx-auto p-8 dark:bg-black">
        <h2 className="text-3xl md:text-4xl font-bold dark:text-white text-center my-8">
          Meet the druids
        </h2>

      <div className="flex justify-center gap-8 w-full">

      <div className="w-3/4 p-6 dark:bg-gray-700 rounded-lg">
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5  px-2 py-2">
        {employees.map((people) => {
          const { id, field_people = [] } = people;
          
          // Group employee data
          let employeeData = {
            image: '',
            name: '',
            title: '',
            description: ''
          };

          field_people.forEach((item: any) => {
            switch (item.type) {
              case 'paragraph--services_images':
                if ((item as any).field_service_image?.[0]?.field_media_image?.[0]?.uri?.url) {
                  employeeData.image = `${drupalBaseUrl}${item.field_service_image[0].field_media_image[0].uri.url}`;
                }
                break;
              case 'paragraph--employee_name':
                employeeData.name = item.field_employee_name?.value || 'Name Not Provided';
                break;
              case 'paragraph--employee_title':
                employeeData.title = item.field_employee_title?.value || 'Title Not Available';
                break;
              case 'paragraph--long_description':
                employeeData.description = item.field_content?.[0]?.value || 'Description Not Available';
                break;
            }
          });

          return (
            <div 
              key={id} 
              className="overflow-hidden w-48 h-64 text-center"
            >
              {employeeData.image && (
                <div className="flex justify-center p-2">
                  <div className="h-24 w-24 overflow-hidden rounded-full">
                    <img
                      src={employeeData.image}
                      alt={`${employeeData.name}'s profile`}
                      className="w-full h-full object-cover"
                    />
                  </div>
                </div>
              )}
              <div className="p-2">
                <h3 className="text-sm font-bold text-gray-900 dark:text-white mb-1 truncate text-center">{employeeData.name}</h3>
                <p className="text-xs dark:text-white text-gray-600 truncate text-center">{employeeData.title}</p>
              </div>
            </div>
          );
        })}
      </div>
      </div>
      </div>
      </div>
      </>

  );
};

export default AboutUs;
