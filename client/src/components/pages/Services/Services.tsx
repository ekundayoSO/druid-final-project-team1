import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import { Service } from '@/types/Services';


const Services = () => {
  const [services, setServices] = useState<Service[]>([]);
  const [isLoading, setIsLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);

  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/services_new`);
        console.log(response.data.data);

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
    <div className="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 p-4 mx-28">
      {services.map((service) => {
        const { id, field_service_card_description, field_service_card_title } = service;
        return (
          <Link
            to={`/service/${id}`}
            key={id}
            className="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
          >
            <h2 className='text-md font-bold'>{field_service_card_title?.value || 'Title Not Available'}</h2>
            <div
              dangerouslySetInnerHTML={{
                __html: field_service_card_description?.value || 'Long Description Not Available',
              }}
            />
            <span className="mr-1 text-red-500">&rarr; Read more</span>
          </Link>
        );
      })}
    </div>
  );
};

export default Services;