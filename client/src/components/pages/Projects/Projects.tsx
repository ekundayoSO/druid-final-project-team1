import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import { Case, ServiceTaxonomy, CardImage } from '@/types/Projects';

const DruidProjectList = () => {
  const [cases, setCases] = useState<Case[]>([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/single_case`, {
          params: {
            include: 'field_card_image,field_services_taxonomy',
          },
        });
        console.log(response.data.data);

        setCases(response.data.data);
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
  if (cases.length === 0) return <div>No cases available</div>;

  return (
    <div className="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 p-4 mx-28">
      {cases.map((caseItem) => {
        const { id} = caseItem;
        const { title, field_card_description, field_card_image, field_services_taxonomy } = caseItem;

        return (
          <Link
            to={`/case/${id}`}
            key={id}
            className="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
          >
            {field_card_image && field_card_image.uri ? (
              <img
                src={`${drupalBaseUrl}${field_card_image.uri.url}`}
                alt={field_card_image.meta?.alt || 'Hero Image'}
                className="w-full h-48 object-cover"
              />
            ) : (
              <div className="w-full h-48 bg-gray-200 flex items-center justify-center">
                <span className="text-gray-500">No image available</span>
              </div>
            )}
            <div className="flex flex-row items-center justify-between space-x-4 mb-4">
              <h2 className="text-xl font-bold mb-2">{title}</h2>
              <div className="flex items-center space-x-2">
                <ul className="flex">
                  {field_services_taxonomy?.map((service, index, array) => (
                    <li className="inline-block list-none" key={service.id}>
                      {service.name}
                      {index < array.length - 1 && <span className="mr-1"> /</span>}
                    </li>
                  ))}
                </ul>
              </div>
            </div>
            {field_card_description && (
              <div className="mt-2" dangerouslySetInnerHTML={{ __html: field_card_description.processed }} />
            )}
            <span className="mr-1 text-red-500">&rarr; Read more</span>
          </Link>
        );
      })}
    </div>
  );
};

export default DruidProjectList;