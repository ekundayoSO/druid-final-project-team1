import { useEffect, useState } from 'react';
import axios from 'axios';

export const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

export const useFetchProjects = () => {
  const [projectsItems, setProjectsItems] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/single_case`, {
            params: {
              include: 'field_card_image,field_services_taxonomy',
            },
          });
        console.log(response.data.data);

        setProjectsItems(response.data.data);
        setIsLoading(false);
      } catch (err) {
        setError('An error occurred while fetching the data');
        setIsLoading(false);
        console.error('Fetch error:', err);
      }
    };

    fetchData();
  }, []);

return { projectsItems, isLoading, error };
}

