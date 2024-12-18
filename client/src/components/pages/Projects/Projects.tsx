import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import { Case } from '@/types/Projects';
import { Card, CardContent, CardHeader} from '@/components/ui/card';
import { Button } from '@/components/ui/button';

const Projects= () => {
  const [cases, setCases] = useState<Case[]>([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const [selectedCategory, setSelectedCategory] = useState<string | null>(null);
  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';
  
  const categories = Array.from(
    new Set(
      cases.flatMap((item) =>
        'field_services_taxonomy' in item && Array.isArray(item.field_services_taxonomy) 
          ? item.field_services_taxonomy.map((t: { name: string }) => t.name) 
          : []
      )
    )
  );

  const filteredProjectItems = selectedCategory
    ? cases.filter((item) =>
        'field_services_taxonomy' in item && Array.isArray(item.field_services_taxonomy) &&
        item.field_services_taxonomy.some((t: { name: string }) => t.name === selectedCategory)
      )
    : cases;


  const handleCategoryClick = (category: string) => {
    setSelectedCategory(selectedCategory === category ? null : category);
  };

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
    <div className='relative w-full min-h-screen overflow-auto bg-gray-200 dark:bg-gray-700 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen py-16'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-gray-100 text-center p-3 leading-tight'>
        Cus­to­mer Ca­ses
        </h1>
        <p className='text-gray-700 dark:text-gray-300 mb-8 text-center max-w-xl'>
          
          We have well over a hundred projects behind us. Take a look at these examples of our successful collaborations.

        </p>

        <div className='flex justify-center space-x-4 mb-8'>
          {categories.map((category) => (
            <Button
              key={category}
              variant={selectedCategory === category ? 'default' : 'outline'}
              onClick={() => handleCategoryClick(category)}
            >
              {category}
            </Button>
          ))}
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 max-w-screen-xl mx-auto px-4">
   
          {filteredProjectItems.map((caseItem) => {
            const { id, title, field_card_description, field_card_image, field_services_taxonomy } = caseItem;

            return (       
            <Card key={id}>
              <Link
                to={`/projects/${id}`}
                className="bg-white  rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
              >
                <CardHeader>
                {field_card_image && field_card_image.uri ? (
                  <div className="aspect-w-16 aspect-h-9 w-full">
                    <img
                      src={`${drupalBaseUrl}${field_card_image.uri.url}`}
                      alt={field_card_image.meta?.alt || 'Hero Image'}
                      className="w-full h-[300px] object-cover object-center rounded-lg"
                    />
                  </div>
                ) : (
                  <div className="w-full h-[300px] bg-gray-200 flex items-center justify-center">
                    <span className="text-gray-500">No image available</span>
                  </div>
                )}
                                <CardContent>
                <div className="flex flex-row items-center justify-between space-x-4 mb-4">
                  <h2 className="text-xl font-bold mt-6">{title}</h2>

                </div>
                {field_card_description && (
                  <div  dangerouslySetInnerHTML={{ __html: field_card_description.processed }} />
                )}
   
                <div className='mt-4'>
                    <ul className='flex flex-wrap gap-2'>
                      {field_services_taxonomy?.map((service, index, array) => (
                        <li className='bg-gray-200 dark:bg-gray-700 rounded-md px-2 py-1 text-sm' key={service.id}>
                          {service.name}
                          {index < array.length - 1 && <span className="mr-1"> </span>}
                        </li>
                      ))}
                    </ul>
                  </div>
                  </CardContent>
                </CardHeader>
              </Link>
              </Card>
            );
            
          })}
        </div>
      </div>
    </div>
  );
};

export default Projects;