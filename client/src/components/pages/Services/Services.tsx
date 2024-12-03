import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import { Service } from '@/types/Services';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { Car } from 'lucide-react';


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
    <div className='relative w-full min-h-screen overflow-auto bg-gray-100 dark:bg-gray-900 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen py-16'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-gray-100 text-center p-3 leading-tight'>
        Our ser­vi­ces
        </h1>
        <p className='text-gray-700 dark:text-gray-300 mb-8 text-center max-w-xl'>
        

We thrive on designing and implementing digital solutions that help our clients’ businesses win. We keep things on budget, on time and involve customers in development, so they get to enjoy the journey – and the results.

Driven by passion, we develop high-performing, dependable web services tailored to our clients’ business goals. We excel at navigating technically intricate projects while upholding the highest standards of quality.
        </p>

        <div className='flex justify-center space-x-4 mb-8 p-4'>
      {services.map((service) => {
        const { id, field_service_card_description, field_service_card_title } = service;
        return (
          <Card key={id} className="flex-1 mx-2">
            <CardHeader className="flex flex-col justify-between h-full">
              <CardContent>
                <Link to={`/service/${id}`}>
                  <CardTitle className='text-lg font-bold'>{field_service_card_title?.value || 'Title Not Available'}</CardTitle>
                  <p
                    dangerouslySetInnerHTML={{
                      __html: field_service_card_description?.value || 'Long Description Not Available',
                    }}
                  />
                </Link>
              </CardContent>
              <span className="mr-1 text-red-500 mt-auto">&rarr; Read more</span>
            </CardHeader>
          </Card>
        );
      })}
    </div>
    </div>
    </div>
  );
};

export default Services;