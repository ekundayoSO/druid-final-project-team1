import React, { useEffect, useState } from 'react';
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
        <div className='flex flex-col md:flex-row items-center justify-center dark:text-white w-full max-w-7xl mx-auto p-8'>
          <div className='flex flex-col items-start justify-center w-full md:w-1/2 mb-8 md:mb-0'>
            <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-left p-3 rounded-lg leading-tight mt-16 md:mt-24'>
              Open Sour­ce <br/>Open At­ti­tu­de
            </h1>
            <p className='mb-8 max-w-xl text-left'>
              We are the uncompromising and uncomplicated software house. We design and implement high-quality digital solutions with passion and technological expertise.
            </p>

            <div className='w-full md:w-1/2 flex items-center justify-center h-full'>
              <a href="/services" className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Check out our services</a>
            </div>
          </div>
          <div className='w-full md:w-1/2 flex'>
            <img src={aboutPic1} alt="three people looking at a computer" className='w-full h-auto object-cover rounded-lg shadow-lg mt-24' />
          </div>
        </div>
        </div>
</div>
          <div className='relative w-full dark:text-white overflow-auto min-h-screen bg-gray-200 dark:bg-gray-800 m-0 p-0'>
          <div className='flex flex-col items-center justify-center h-full'>
        <h2 className="text-3xl md:text-4xl font-bold  text-center col-span-full mt-20">
          A mo­re func­tio­nal world, from one li­ne of co­de to the next
          </h2>

                  {/* New Section 1 */}
        <div className="flex mx-12 justify-center">
          <div className="w-2/5">
            <img src={aboutPic2} alt="two men infront of a computer" className='w-full h-auto object-cover rounded-lg shadow-lg mt-24' />
          </div>
          <div className="w-2/5 flex flex-col justify-center p-10">
            <h2 className='text-3xl font-bold '>How it started...</h2>
            <p className=' mt-2 w-4/5'>
            In 2012, Tero, Arto, Samuli, Mika and Roni decided to start a new  software house. They wanted to make it the best workplace for  developers, make clients happy and work on agile projects that would  make the digital world a better place to be. How the company has grown  and how projects have impacted has wildly exceeded their early dreams.
            The company originally got its name from ancient druids. The five  friends related strongly to those seers that made the world better with  their spells. They felt the same potential with their code.
            </p>
          </div>
        </div>

        {/* New Section 2 */}
        <div className="flex mb-16 mx-12 justify-center">
          <div className="w-2/5 flex flex-col justify-center pl-10">
            <h2 className='text-3xl font-bold '>...How it’s going on</h2>
            <p className=' mt-2 w-4/5'>
            Five developers is now a diverse group of nearly 30 tech maestros.  However, the founding principles have remained the same. Openness is in  everything we do. Our open attitude and flexible use of open source  technologies have given us this great combination of long-term customer  relationships and long-lasting services.
            Our customers and partners like to work with us because we are always approachable and constructive. We have an assured, fearless and fresh  attitude towards the possibilities of the digital world.</p>
          </div>
          <div className="w-2/5">
            <img src={aboutPic3} alt="five men infront of a forest" className='w-full h-auto object-cover rounded-lg shadow-lg mt-24' />
          </div>
        </div>
      </div>
              {/* New Section 3 */}
      <div className="flex flex-col justify-center items-center w-full min-h-screen mx-auto p-8 bg-black" style={{ backgroundImage: `url(${aboutPic4})`, backgroundSize: 'cover', backgroundPosition: 'center', backgroundColor: 'rgba(0, 0, 0, 0.7)' }}>
        <h2 className="text-3xl text-white md:text-4xl font-bold  text-center my-8">
          Why Druid?
        </h2>
        <div className="flex justify-center gap-8 w-full">
          <div className="w-1/4 p-6 bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg ">
            <h3 className="text-xl font-bold  mb-6">Know­led­ge and pas­sion</h3>
            <p>We see it as dedication – someone else might call it nerdy. Our passion  is to find the best digital solutions for our clients. And we don’t hide from the challenge. We believe in openness in source, but also in how  we cooperate.</p>
          </div>
          <div className="w-1/4 p-6 bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg ">
            <h3 className="text-xl font-bold  mb-6">Big pic­tu­re. Small de­tails.</h3>
            <p>We advise, design and execute to make accessible, focused and ultimately successful digital services. We enjoy balancing different roles for  different customers. We are programmed to be ready for brainstorming or  coding, or even both.</p>
          </div>
          <div className="w-1/4 p-6 bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg ">
            <h3 className="text-xl font-bold  mb-6">Clo­se and fle­xib­le coo­pe­ra­tion</h3>
            <p>We don’t talk in code – well, perhaps sometimes to each other. We  take care of technology so our customers don’t have to. The  uncomplicated service experience is the same in our digital services as  it is in working with us. We believe in long-term partnerships. In our  agile projects, we welcome our customers as members of our team.</p>
          </div>
          <div className="w-1/4 p-6 bg-gray-200 dark:bg-gray-700 rounded-lg shadow-lg ">
            <h3 className="text-xl font-bold  mb-6">From
            one tech­no­lo­gy to anot­her</h3>
            <p>Our roots are in Drupal, and it’s safe to say we are leaders in  Finland when it comes to exploiting Drupal’s strengths as a platform,  particularly for ecommerce. However, we always choose technologies  according to each customer’s needs. We are meticulous and we tailor  solutions to best serve the goals of each project.</p>
          </div>
        </div>
      </div>
      </div>
      <div className="flex flex-col justify-center items-center w-full min-h-screen mx-auto p-8 dark:bg-black">
        <h2 className="text-3xl md:text-4xl font-bold dark:text-white text-center my-8">
          Meet the druids
        </h2>

      <div className="flex justify-center gap-8 w-full">

      <div className="w-3/4 p-6 rounded-lg">
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
                <a href={`/about-us/${id}`}>
                <div className="flex justify-center p-2">
                  <div className="h-24 w-24 overflow-hidden rounded-full">
                    <img
                      src={employeeData.image}
                      alt={`${employeeData.name}'s profile`}
                      className="w-full h-full object-cover"
                    />
                  </div>
                </div>
                </a>
              )}
              <div className="p-2">
                <a href={`/about-us/${id}`} className="text-sm font-bold text-gray-900 dark:text-white mb-1 truncate text-center">
                  {employeeData.name}
                </a>
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
