import { useEffect, useState } from 'react';
import axios from 'axios';

export const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

export const useFetchServices = () => {
  const [servicesItems, setServices] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);


  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/services`, {
          params: {
            include: 'field_services_section',
          },
        });

        const data = response.data.data[0];
        console.log('Full API Response:', data);
        setServices(data);
        setIsLoading(false);
      } catch (err: any) {
        setError('Error fetching data: ' + err.message);
        setIsLoading(false);
        console.error('Fetch error:', err);
      }
    };

    fetchData();
  }, []);



return { servicesItems, isLoading, error };
}