import { useParams } from 'react-router-dom';
import { useFetchCareers } from '@/hooks/useFetchCareers';
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card';
import { drupalBaseUrl } from '@/hooks/useFetchCareers';

interface CareersItem {
  id: string;
  field_hero_image?: {
    uri: {
      url: string;
    };
    meta: {
      alt?: string;
    };
  };
  field_date_of_post: string;
  field_author?: {
    display_name?: string;
  };
  field_add_title: string;
  field_short_description?: {
    value: string;
  };
  field_add_title_text_content_ima?: Array<{
    id: string;
    type: string;
    field_add_title?: Array<{ value: string }>;
    field_add_textfield?: { value: string };
    field_add_link?: { uri: string; title?: string };
  }>;
}

const CareerPost = () => {
  const { careersItems, isLoading, error } = useFetchCareers() as { careersItems: CareersItem[]; isLoading: boolean; error: string | null };
  const { id } = useParams<{ id: string }>();

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;

  const careersItem = careersItems.find((item) => item.id === id);

  if (!careersItem) return <div>Career post not found</div>;

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-100 dark:bg-gray-900 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen py-16'>
        <Card className='w-full max-w-3xl'>
          {careersItem.field_hero_image && (
            <img
              src={`${drupalBaseUrl}${careersItem.field_hero_image.uri.url}`}
              alt={careersItem.field_hero_image.meta.alt || 'Hero Image'}
              className='w-full h-64 object-cover'
            />
          )}
          <CardContent>
            <CardHeader>
              <div className='flex justify-between mb-2'>
                <p className='text-sm text-gray-500 dark:text-gray-400'>
                  {new Date(careersItem.field_date_of_post)
                    .toLocaleDateString('en-GB', {
                      day: '2-digit',
                      month: '2-digit',
                      year: 'numeric',
                    })
                    .replace(/\//g, '.')}
                </p>
                <p className='text-sm text-gray-500 dark:text-gray-400'>{careersItem.field_author?.display_name}</p>
              </div>
              <CardTitle>{careersItem.field_add_title}</CardTitle>
              <CardDescription>{careersItem.field_short_description?.value}</CardDescription>
            </CardHeader>
            {careersItem.field_add_title_text_content_ima?.map((content) => {
              switch (content.type) {
                case 'paragraph--add_title':
                  return (
                    <h3 key={content.id} className='text-xl font-semibold mt-4'>
                      {content.field_add_title?.[0]?.value}
                    </h3>
                  );
                case 'paragraph--add_textfield':
                  return (
                    <div
                      key={content.id}
                      className='mt-2'
                      dangerouslySetInnerHTML={{ __html: content.field_add_textfield?.value || '' }}
                    />
                  );
                case 'paragraph--add_link':
                  return (
                    <div key={content.id} className='mt-2'>
                      <a
                        href={content.field_add_link?.uri}
                        target='_blank'
                        rel='noopener noreferrer'
                        className='text-blue-500 hover:underline'
                      >
                        {content.field_add_link?.title || 'Visit link'}
                      </a>
                    </div>
                  );
                default:
                  return null;
              }
            })}
          </CardContent>
        </Card>
      </div>
    </div>
  );
};

export default CareerPost;
