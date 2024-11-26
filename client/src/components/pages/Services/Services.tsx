import { useEffect, useState } from 'react';
import axios from 'axios';
import { Button } from '@/components/ui/button';
import { FieldAddSection, FieldImage, FieldServicesSection, ServicesData } from '@/types/Services';

const Services = () => {
  const [services, setServices] = useState<ServicesData | null>(null);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);
  const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/services`, {
          params: {
            include: 'field_services_section',
          },
        });

        const data = response.data.data[0];
        console.log('Full API Response:', data);
        setServices(data);
        setIsLoading(false);
      } catch (err: any) {
        setError('Error fetching data: ' + err.message);
        setIsLoading(false);
        console.error('Fetch error:', err);
      }
    };

    fetchData();
  }, []);

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;
  if (!services) return <div>No services available</div>;

  const getHtmlContent = (content?: FieldAddSection | FieldServicesSection) => {
    if (!content) return { __html: '' };
    return { __html: 'field_add_section' in content ? content.field_add_section.value : content.value };
  };

  return (
    <div className='bg-gray-100 dark:bg-gray-900 min-h-screen'>
      {/* Hero Section */}
      <div className='relative overflow-hidden'>
        <div className='container mx-auto flex flex-col-reverse md:flex-row items-center justify-between px-6 py-24 lg:py-32'>
          <div className='w-full md:w-1/2 text-center md:text-left'>
            <h1 className='text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-gray-100 mb-4'>
              {services.title}
            </h1>
            {services.field_services_section.length > 0 && (
              <div
                className='text-gray-700 dark:text-gray-300 mb-8 prose lg:prose-xl dark:prose-invert'
                dangerouslySetInnerHTML={getHtmlContent(services.field_services_section[0])}
              />
            )}
            <Button>Contact Us</Button>
          </div>
          <div className='w-full md:w-1/2 mb-8 md:mb-0 relative aspect-[9/16] md:aspect-[3/2]'>
            {services.field_services_section.length > 0 && services.field_services_section[0].field_section_image && (
              <img
                src={`${drupalBaseUrl}${services.field_services_section[0].field_section_image.uri.url}`}
                alt={services.field_services_section[0].field_section_image?.meta?.alt || 'Service Image'}
                className='absolute inset-0 w-full h-full object-cover rounded-lg'
              />
            )}
          </div>
        </div>
      </div>

      {/* Cards Section */}
      <div className='container mx-auto py-16 px-6'>
        <div className='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8'>
          {services.field_services_section.slice(1).map((section, index) => (
            <div key={index} className='bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden p-6'>
              {section.field_section_image && (
                <img
                  src={`${drupalBaseUrl}${section.field_section_image.uri.url}`}
                  alt={section.field_section_image?.meta?.alt || `Service ${index + 2}`}
                  className='w-full h-48 object-cover mb-4 rounded-lg'
                />
              )}
              <h3 className='text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2 text-center'>
                {section.field_section_title || `Service ${index + 2}`}
              </h3>
              <div
                className='text-gray-700 dark:text-gray-300 mb-4 prose dark:prose-invert max-w-none'
                dangerouslySetInnerHTML={getHtmlContent(section)}
              />
              <div className='flex justify-center'>
                <Button>Read more</Button>
              </div>
            </div>
          ))}
        </div>
      </div>

      {/* Testimonials Section */}
      <div className='bg-gray-900 dark:bg-gray-700 py-24 px-6'>
        <div className='container mx-auto max-w-4xl text-center'>
          {services.field_testimonial_quote && (
            <div
              className='italic text-white text-2xl md:text-4xl'
              dangerouslySetInnerHTML={getHtmlContent(services.field_testimonial_quote)}
            />
          )}
          {services.field_testimonial_author && (
            <p className='text-gray-300 mt-4 text-lg'>
              – <span dangerouslySetInnerHTML={getHtmlContent(services.field_testimonial_author)} />
            </p>
          )}
        </div>
      </div>

      {/* Additional Services Section */}
      <div className='container mx-auto py-16 px-6 bg-gray-800'>
        {services.field_add_services_title && (
          <h2
            className='text-3xl md:text-4xl font-bold text-white text-center mb-8'
            dangerouslySetInnerHTML={getHtmlContent(services.field_add_services_title)}
          />
        )}
        {services.field_additional_services && Array.isArray(services.field_additional_services) && (
          <div className='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8'>
            {services.field_additional_services.map((service, index) => (
              <div key={index} className='flex items-center p-4'>
                {service.field_icon && (
                  <img
                    src={`${drupalBaseUrl}${service.field_icon.uri.url}`}
                    alt={service.field_icon?.meta?.alt || `Icon ${index + 1}`}
                    className='mr-4 h-12 w-12'
                  />
                )}
                {service.field_description && (
                  <p
                    className='text-white text-lg'
                    dangerouslySetInnerHTML={getHtmlContent(service.field_description)}
                  />
                )}
              </div>
            ))}
          </div>
        )}
      </div>
    </div>
  );
};

export default Services;
