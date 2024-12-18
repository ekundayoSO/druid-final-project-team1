import { Link, useParams } from 'react-router-dom';
import { useFetchCareers } from '@/hooks/useFetchCareers';
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card';
import { drupalBaseUrl } from '@/hooks/useFetchCareers';
import { Career, ServicesImagesProps, HeroMessageProps,Topic, LongDescriptionProps } from '@/types/Careers';

// Component for paragraph--services_images
const ServicesImages = ({ item }: ServicesImagesProps) => (
  <CardHeader>
  <div key={item.id}>
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
// component for paragraph--hero_message
const HeroMessage = ({ item, title }: HeroMessageProps) => (
  <CardContent>
    <CardHeader>
      <div key={item.id}>
        <CardTitle className='mb-1'>{title}</CardTitle>
        <div dangerouslySetInnerHTML={{ __html: item.field_message?.value || 'Not Provided' }} />
      </div>
    </CardHeader>
  </CardContent>
);

// New component for paragraph--topic
const TopicComponent = ({ item }: Topic ) => (
  <CardContent>
  <CardDescription>
  <div className='mb-4 mx-8 text-justify text-lg' key={item.id}>
    <div className='mb-4' dangerouslySetInnerHTML={{ __html: item.field_short_heading?.[0]?.value || 'Not Provided' }} />
  </div>
  </CardDescription>
  </CardContent>
);

// New component for paragraph--long_description
const LongDescription = ({ item }: LongDescriptionProps) => (
  <CardContent>
  <CardDescription>
  <div key={item.id}>
    <div dangerouslySetInnerHTML={{ __html: item.field_content?.[0]?.value || 'Description Not Provided' }} />
  </div>
  </CardDescription>
  
  </CardContent>
);

// Mapping of paragraph types to components
const paragraphComponents: Record<string, React.FC<any>> = {
  'paragraph--services_images': ServicesImages,
  'paragraph--hero_message': HeroMessage,
  'paragraph--topic': TopicComponent,
  'paragraph--long_description': LongDescription,
};

const CareersPost = () => {
  const { careersItems, isLoading, error } = useFetchCareers();
  const { id } = useParams<{ id: string }>();

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;

  const career = careersItems.find((item: Career) => item.id === id) as Career | undefined;

  if (!career) return <div>Careers post not found</div>;

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-200 dark:bg-gray-700 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen py-16'>
        <Card className='w-full max-w-3xl'>
          {career.field_careers?.map((item) => {
            const ParagraphComponent = paragraphComponents[item.type];
            return ParagraphComponent ? (
              item.type === 'paragraph--hero_message' ? (
                <ParagraphComponent key={item.id} item={item} title={career.title} />
              ) : (
                <ParagraphComponent key={item.id} item={item} />
              )
            ) : (
              item.type === 'paragraph--topic' || item.type === 'paragraph--long_description' ? null : (
                <div key={item.id}>
                  <p>Unhandled paragraph type: {item.type}</p>
                </div>
                
              )
            );
          })}
          <CardContent>
                            <div className="flex justify-end">
              <Link to="/careers" className="text-gray-500 hover:underline mb-4 inline-block">
                &larr; Back to Careers
              </Link>
            </div>
            </CardContent>
        </Card>
      </div>
    </div>
  );
};

export default CareersPost;
