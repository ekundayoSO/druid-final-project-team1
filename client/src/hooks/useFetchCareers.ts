import { useEffect, useState } from 'react';
import axios from 'axios';

export const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

export const useFetchCareers = () => {
  const [careersItems, setCareersItems] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/careers`, {
          params: {
            include: 'field_careers, field_careers.field_service_image.field_media_image',
          },
        });
        console.log(response.data.data);

        setCareersItems(response.data.data);
        setIsLoading(false);
      } catch (err) {
        setError('An error occurred while fetching the data');
        setIsLoading(false);
        console.error('Fetch error:', err);
      }
    };

    fetchData();
  }, []);

return { careersItems, isLoading, error };
}