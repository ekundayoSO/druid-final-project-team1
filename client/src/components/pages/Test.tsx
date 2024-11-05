import React, { useEffect, useState } from 'react';
import { fetchPages } from '@/lib/api/drupalAPI-paragraphs';

const Test: React.FC = () => {
  const [TestContent, setTestContent] = useState<string>('');

  useEffect(() => {
    const getTestContent = async () => {
      try {
        const data = await fetchPages();
        const TestPage = data.find((page) => page.attributes.field_title === 'Item 1');
        if (TestPage) {
          setTestContent(
            TestPage.attributes.field_description,
             );
        }
      } catch (error) {
        console.error('Error fetching Test content:', error);
      }
    };

    getTestContent();
  }, []);

  return (
    <div className='container mx-auto px-4'>
      <div dangerouslySetInnerHTML={{ __html: TestContent }} />
    </div>
  );
};

export default Test;