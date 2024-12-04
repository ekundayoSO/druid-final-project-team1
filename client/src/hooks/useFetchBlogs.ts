import { useState, useEffect } from 'react';
import axios from 'axios';

export const drupalBaseUrl = 'https://druid-final-project-team1.lndo.site';

export const useFetchBlogs = () => {
  const [blogItems, setBlogItems] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`${drupalBaseUrl}/jsonapi/node/blog_item`, {
          params: {
            include:
              'field_add_title_text_content_ima,field_blog_taxonomy,field_hero_image,field_add_title_text_content_ima.field_add_image.field_media_image,field_author',
          },
        });

        setBlogItems(response.data.data);
        setIsLoading(false);
      } catch (err) {
        setError('An error occurred while fetching the data');
        setIsLoading(false);
        console.error('Fetch error:', err);
      }
    };

    fetchData();
  }, []);

  return { blogItems, isLoading, error };
};
