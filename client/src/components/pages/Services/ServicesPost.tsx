import { useEffect, useState } from 'react';
import { useParams, Link } from 'react-router-dom';
import axios from 'axios';
import { ReadMore } from '@/types/Services';


const ServicesPost = () => {
  const [readMore, setReadMore] = useState<ReadMore | null>(null);
  const [isLoading, setIsLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);
  const { id } = useParams();

  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/services_new/${id}`, {
          params: {
            include: 'field_read_more,field_read_more.field_service_image.field_media_image',
          },
        });
        console.log(response.data.data);

        setReadMore(response.data.data);
        setIsLoading(false);
      } catch (err) {
        setError('An error occurred while fetching the data');
        setIsLoading(false);
        console.error('Fetch error:', err);
      }
    };

    fetchData();
  }, [id]);

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;
  if (!readMore) return <div>No service available</div>;


  return (
    <div style={{ border: '4px solid green', maxWidth: '1600px' }} className="case mb-4 mx-auto">
      <Link to="/services" className="text-blue-500 hover:underline mb-4 block">
        <button className="mt-2 bg-blue-600 text-white font-bold py-2 px-2 rounded">Back to all services</button>
      </Link>
      {readMore.field_read_more?.map((item) => {
        switch (item.type) {
          case 'paragraph--hero_message':
            return (
              <div className="mb-4" key={item.id}>
                <div dangerouslySetInnerHTML={{ __html: item.field_message?.value || 'Not Provided' }} />
              </div>
            );
          case 'paragraph--topic':
            return (
              <div key={item.id}>
                <h4 className="text-xl mt-2 font-bold">
                  {item.field_short_heading?.[0]?.value || 'Topic Title Not Available'}
                </h4>
              </div>
            );
          case 'paragraph--long_description':
            return (
              <div key={item.id}>
                <div
                  dangerouslySetInnerHTML={{
                    __html: item.field_content?.[0]?.value || 'Long Description Not Available',
                  }}
                />
              </div>
            );
          case 'paragraph--link':
            if (item.field_additional_infomation?.title === 'Explore Druid XP') {
              return (
                <div key={item.id} className="mt-2">
                  <Link className='p-2' style={{border: "1px solid blue", backgroundColor: "black", color: "white", borderRadius: "4px"}} to="/druid-xp" target='_blank'>{item.field_additional_infomation.title}</Link>
                </div>
              );
            } else {
              return (
                <div key={item.id} className="link">
                  {item.field_additional_infomation && (
                    <a href={item.field_additional_infomation.uri} target="_blank" rel="noopener noreferrer">
                      {item.field_additional_infomation.title || 'Read more'}
                    </a>
                  )}
                </div>
              );
            }
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
          case 'paragraph--feedback':
            return (
              <div key={item.id}>
                <div
                  dangerouslySetInnerHTML={{
                    __html: item.field_customers_feedbacks?.value || 'Not Provided',
                  }}
                />
              </div>
            );
          default:
            return (
              <div key={item.id}>
                <p>Unhandled paragraph type: {item.type}</p>
              </div>
            );
        }
      })}
    </div>
  );
};

export default ServicesPost;