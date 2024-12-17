import { useEffect, useState } from 'react';
import axios from 'axios';
import { LandingPageData } from '../../types/DynamicContent';


const DynamicContent = () => {
  const [landingPageData, setLandingPageData] = useState<LandingPageData | null>(null);
  const [isLoading, setIsLoading] = useState(true);

  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/landing_page`, {
          params: {
            include: 'field_dynamic_content',
          },
        });
        setLandingPageData(response.data.data[0]);
        setIsLoading(false);
      } catch (err) {
        setIsLoading(false);
        console.error('Fetch error:', err);
      }
    };

    fetchData();
  }, []);

  if (isLoading) return <div>Loading...</div>;
  if (!landingPageData) return <div>No landing page data available</div>;

  const { field_dynamic_content } = landingPageData;

  return (
    <div>
      <div className="bg-gray-900 mx-auto">
        {field_dynamic_content && (
          <div
            dangerouslySetInnerHTML={{
              __html: field_dynamic_content.field_content[0]?.processed || '',
            }}
          />
        )}
      </div>
    </div>
  );
};

export default DynamicContent;
