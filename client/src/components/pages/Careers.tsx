import { useEffect, useState } from 'react';
import { useNavigate } from 'react-router-dom';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { useFetchCareers, drupalBaseUrl } from '@/hooks/useFetchCareers';

// typed data for the career object
type Career = {
  id: string;
  title: string;
  field_careers: Array<any>; 
};

const Careers = () => {
    const { careersItems, isLoading, error } = useFetchCareers();

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;
  if (careersItems.length === 0) return <div>No services available</div>;

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-100 dark:bg-gray-900 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen py-16'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-gray-100 text-center p-3 leading-tight'>
          Careers
        </h1>
        <p className='text-gray-700 dark:text-gray-300 mb-8 text-center max-w-xl'>
        Here at Druid, we're all about crafting a cooler web – think open-source vibes and an open-for-anything mindset. From user-friendly sites to apps that make life smoother, we're all in on cracking puzzles and creating top-tier solutions that'll really make a difference down the road.
        </p>

      {careersItems.map((jobs: Career) => {
        const { id, title, field_careers } = jobs;

        return (
            <div className='grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 max-w-screen-xl mx-auto px-4'>
            <Card key={id} className='w-full cursor-pointer' >
            
            
            {field_careers?.map((item) => {
              switch (item.type) {
                case 'paragraph--services_images':
                  return (
                    <div key={item.id}>
                      {item.field_service_image && item.field_service_image[0]?.field_media_image && (
                        <img
                          src={`${drupalBaseUrl}${item.field_service_image[0].field_media_image[0].uri.url}`}
                          alt={item.field_service_image[0].field_media_image[0].meta.alt || 'Service Image'}
                          className="mx-auto w-full h-auto max-w-screen-md object-cover"
                        />
                      )}
                    </div>
                  );
                case 'paragraph--hero_message':
                  return (
                    <CardContent>
                <CardHeader>
                    <div key={item.id}>
                        <CardTitle>{title.toUpperCase()}</CardTitle>
                      <div dangerouslySetInnerHTML={{ __html: item.field_message?.value || 'Not Provided' }} />
                    </div>
                    </CardHeader>
                    </CardContent>
                  );
                case 'paragraph--topic':
                  return (
                    <CardContent>
                    <div key={item.id}>
                      <h4>{item.field_short_heading?.[0]?.value || 'Topic Title Not Available'}</h4>
                    </div>
                    </CardContent>
                  );
                case 'paragraph--long_description':
                  return (
                    <CardContent>
                    <div key={item.id}>
                      <div
                        dangerouslySetInnerHTML={{
                          __html: item.field_content?.[0]?.value || 'Long Description Not Available',
                        }}
                      />
                    </div>
                    </CardContent>
                  );
                default:
                  return (
                    <div key={item.id}>
                      <p>Unhandled paragraph type: {item.type}</p>
                    </div>
                  );
              }
            })}

          </Card>
          </div>
        );
      })}
    </div>
    </div>
  );
};

export default Careers;