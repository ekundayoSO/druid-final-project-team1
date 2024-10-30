import { fetchPages } from '@/lib/api/drupalAPI';
import React, { useEffect, useState } from 'react';

const AboutUs: React.FC = () => {
  const [aboutUsContent, setAboutUsContent] = useState<string>('');

  useEffect(() => {
    const getAboutUsContent = async () => {
      try {
        const data = await fetchPages();
        const aboutUsPage = data.find((page) => page.attributes.title === 'About Us');
        if (aboutUsPage) {
          setAboutUsContent(aboutUsPage.attributes.field_content.value);
        }
      } catch (error) {
        console.error('Error fetching About Us content:', error);
      }
    };

    getAboutUsContent();
  }, []);

  return (
    <div>
      <h1>About Us</h1>
      <div className='aboutUs'
      dangerouslySetInnerHTML={{ __html: aboutUsContent }} />
    </div>
  );
};

export default AboutUs;
