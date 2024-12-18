import { useNavigate } from 'react-router-dom';
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { useFetchCareers, drupalBaseUrl } from '@/hooks/useFetchCareers';
import { Career, ServicesImagesProps, HeroMessageProps} from '@/types/Careers';

const Careers = () => {
  const navigate = useNavigate();

  const handleCardClick = (id: string) => {
    navigate(`/careers/${id}`);
  };

  // Components for different paragraph types
  const ServicesImages = ({ item }: ServicesImagesProps) => (
    <CardHeader>

    <div key={item.id} className='w-full cursor-pointer' onClick={() => handleCardClick(item.id)}>
      {item.field_service_image && item.field_service_image[0]?.field_media_image && (
        <img
          src={`${drupalBaseUrl}${item.field_service_image[0].field_media_image[0].uri.url}`}
          alt={item.field_service_image[0].field_media_image[0].meta.alt || 'Service Image'}
          className="w-full aspect-[16/9] object-cover object-center rounded-lg"
        />
      )}
    </div>
    </CardHeader>
  );

  const HeroMessage = ({ item, title }: HeroMessageProps) => (
    <CardContent>
      <CardHeader>
        <div key={item.id}>
          <CardTitle className='mb-4 '>{title}</CardTitle>
          <div className='text-sm' dangerouslySetInnerHTML={{ __html: item.field_message?.value || 'Not Provided' }} />
        </div>
      </CardHeader>
    </CardContent>
  );

  // Mapping of paragraph types to components
  const paragraphComponents: Record<string, React.FC<any>> = {
    'paragraph--services_images': ServicesImages,
    'paragraph--hero_message': HeroMessage,
  };

  const { careersItems, isLoading, error } = useFetchCareers();

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;
  if (careersItems.length === 0) return <div>No services available</div>;

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-200 dark:bg-gray-700 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen py-16'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-gray-100 text-center p-3 leading-tight'>
          Careers
        </h1>
        <p className='text-gray-700 dark:text-gray-300 mb-8 text-center max-w-xl'>
          Here at Druid, we're all about crafting a cooler web – think open-source vibes and an open-for-anything mindset. From user-friendly sites to apps that make life smoother, we're all in on cracking puzzles and creating top-tier solutions that'll really make a difference down the road.
        </p>

        <div className='grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 max-w-screen-xl mx-auto px-4'>
          {careersItems.map((jobs: Career) => {
            const { id, title, field_careers } = jobs;

            return (
              <Card
                key={id}
                className="w-full cursor-pointer transition ease-in-out delay-150"
                onClick={() => handleCardClick(id)}
              >
                {field_careers?.map((item) => {
                  const ParagraphComponent = paragraphComponents[item.type];
                  return ParagraphComponent ? (
                    <ParagraphComponent key={item.id} item={item} title={title} />
                  ) : item.type === 'paragraph--topic' || item.type === 'paragraph--long_description' ? null : (
                    <div key={item.id}>
                      <p>Unhandled paragraph type: {item.type}</p>
                    </div>
                  );
                })}
              </Card>
            );
          })}
        </div>
      </div>
    </div>
  );
};

export default Careers;