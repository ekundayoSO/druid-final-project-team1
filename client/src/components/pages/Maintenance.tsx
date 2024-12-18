import servicesPic1 from '@/assets/20240425-102404-Druid-Oy-1455.jpg';
import axios from 'axios';
import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { MaintenanceItem} from '@/types/Maintanence';

const Maintenence = () => {
  const [maintenance, setMaintenance] = useState<MaintenanceItem[]>([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/maintenance`);
        const maintenanceData = response.data.data;
        console.log(maintenanceData);

        setMaintenance(maintenanceData);
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
  if (maintenance.length === 0) return <div>No maintenance data available</div>;

  return (
    <>
    <div className='relative w-full overflow-auto min-h-screen dark:text-white dark:bg-gray-700 m-0 p-0'>
      <div className='flex flex-col md:flex-row items-center justify-center h-full w-full min-h-screen'>
        <div className='flex flex-col items-center justify-center w-full md:w-1/2 h-full p-8'>
          <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-center p-3 rounded-lg leading-tight mt-16 md:mt-24'>
          Client Sup­port <br/>and Maintanance
          </h1>
          <p className='mb-8 max-w-xl text-left'>
          In the world of digital services, the foundations of longevity are continuous development and support you can trust. We are proactive about resolving problems and making sure that services stay current, adapt to change and continue to boost our customers’ business.
          <br/>
          <br/>
          Long-lasting and deep customer relationships are the only way. As a technology partner, we consult and guide, come up with new ideas to meet changing business needs and continuously develop services for the better.
          </p>
          <div className='flex justify-center w-full'>
            <Link to="/contact" className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Contact Client Support</Link>
          </div>
        </div>
        <div className='w-full md:w-1/2 h-full bg-cover bg-center' style={{ backgroundImage: `url(${servicesPic1})`, minHeight: '100vh' }}>
        </div>
      </div>
    </div>

<div className="bg-gray-400 dark:text-white dark:bg-gray-500 py-12 w-full flex justify-center  min-h-screen mx-auto items-center ">
  <div className="dark:bg-gray-700 bg-gray-200 md:w-3/5 rounded-lg shadow-lg p-8">
    <h2 className="text-3xl font-bold mb-4">Ma­gi­cal Sup­port: Your de­di­ca­ted team for main­te­nan­ce and growth</h2>
    <p className="mb-8">
      Our experienced Magical Support team, led by a designated service manager exclusively for your organization, is committed to delivering maintenance services and assisting with your development needs. Your personalized service manager possesses in-depth knowledge of your project and takes a proactive approach by proposing enhancement ideas.
    </p>
    <p className="mb-8">
      Connecting with us is effortless. You can submit service requests through various channels, including email, Slack, JIRA, Zendesk or by calling our service hotline.
    </p>
    <p className="mb-8">
      We ensure the upkeep of your Drupal website in accordance with our Service Level Agreement (SLA), ensuring it remains up-to-date, secure and continually evolving. We stay current with the latest industry trends and adapt our services to comply with new laws and regulations.
    </p>
    <p className="mb-8">
      We arrange regular client meetings 1-2 times a year to assess service quality, strategize further development and make necessary adjustments.
    </p>
    <p className="mb-8">
      Furthermore, we provide comprehensive user support and training. We offer guidance on implementing new features, such as Cookie banners and Matomo analytics.
      </p>
  </div>
</div>
{/* New Section 3 */}
<div className="flex flex-col justify-center items-center dark:text-white w-full p-8 bg-gray-200 dark:bg-gray-500 pb-40">
        <h2 className="text-3xl md:text-4xl font-bold  text-center my-8">
        The ad­van­ta­ges of choo­sing the Ma­gi­cal Sup­port team
        </h2>
        <div className="flex justify-center gap-8 w-full">
          <div className="w-1/4 p-6 dark:bg-gray-700 rounded-lg shadow-lg">
            <h3 className="text-xl font-bold  mb-6">Drupal expertise</h3>
            <p>Our team at Druid consists of specialists who have honed their skills in the Drupal system, making them exceptionally knowledgeable in all its facets.</p>
          </div>
          <div className="w-1/4 p-6 dark:bg-gray-700 rounded-lg shadow-lg">
            <h3 className="text-xl font-bold  mb-6">Efficient processes</h3>
            <p>We employ standardized workflows that facilitate efficient operations. This means we can quickly scale our team or swap out experts without wasting valuable time.
</p>
          </div>
          <div className="w-1/4 p-6 dark:bg-gray-700 rounded-lg shadow-lg">
            <h3 className="text-xl font-bold  mb-6">Premier partnerships</h3>
            <p>We collaborate with industry-leading partners, including domestic data center service providers, guaranteeing that we collaborate with the best in the field.</p>
          </div>
          <div className="w-1/4 p-6 dark:dark:bg-gray-700 rounded-lg shadow-lg">
            <h3 className="text-xl font-bold  mb-6">Agile organization</h3>
            <p>Our streamlined hierarchy empowers our organization to swiftly identify and address issues and risks as soon as they surface.</p>
          </div>
        </div>
        </div>
        <div>
    </div>
</>
  );
};

export default Maintenence;
