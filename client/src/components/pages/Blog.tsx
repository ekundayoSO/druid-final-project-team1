import { useFetchBlogs, drupalBaseUrl } from '@/hooks/useFetchBlogs';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { useNavigate } from 'react-router-dom';

// typed fields
interface BlogItem {
  id: string;
  field_blog_taxonomy?: { name: string }[]; 
  field_hero_image?: { uri: { url: string }; meta: { alt?: string } }; 
  field_author?: { display_name: string }; 
  field_date_of_post?: string; 
  field_add_title?: string;
  field_short_description?: { value: string };
}

const Blog = () => {
  const { blogItems, isLoading, error } = useFetchBlogs();
  const navigate = useNavigate();

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;
  if (blogItems.length === 0) return <div>No blog items available</div>;

  const categories = Array.from(
    new Set(
      blogItems.flatMap((item: BlogItem) =>
        Array.isArray(item.field_blog_taxonomy) ? item.field_blog_taxonomy.map((t) => t.name) : []
      )
    )
  );

  const handleCardClick = (id: string) => {
    navigate(`/blog/${id}`);
  };

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-100 dark:bg-gray-900 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen py-16'>
        <h1 className='max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-gray-100 text-center p-3 leading-tight'>
          Blogs
        </h1>
        <p className='text-gray-700 dark:text-gray-300 mb-8 text-center max-w-xl'>
          Writings on and off topic – about our everyday life, culture, and the world of software development
        </p>

        <div className='flex justify-center space-x-4 mb-8'>
          {categories.map((category, i) => (
            <Button key={i} variant='outline'>
              {category}
            </Button>
          ))}
        </div>

        <div className='grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 max-w-screen-xl mx-auto px-4'>
          {blogItems.map((item: BlogItem) => (
            <Card key={item.id} className='w-full cursor-pointer' onClick={() => handleCardClick(item.id)}>
              {item.field_hero_image && (
                <img
                  src={`${drupalBaseUrl}${item.field_hero_image.uri.url}`}
                  alt={item.field_hero_image.meta.alt || 'Hero Image'}
                  className='w-full h-64 object-cover'
                />
              )}
              <CardContent>
                <CardHeader>
                  <div className='flex justify-between mb-2'>
                    <p className='text-sm text-gray-500 dark:text-gray-400'>
                      {item.field_date_of_post && new Date(item.field_date_of_post)
                        .toLocaleDateString('en-GB', {
                          day: '2-digit',
                          month: '2-digit',
                          year: 'numeric',
                        })
                        .replace(/\//g, '.')}
                    </p>
                    <p className='text-sm text-gray-500 dark:text-gray-400'>{item.field_author?.display_name}</p>
                  </div>
                  <CardTitle>{item.field_add_title}</CardTitle>
                  <CardDescription>{item.field_short_description?.value}</CardDescription>
                </CardHeader>
                <div className='mt-4'>
                  {Array.isArray(item.field_blog_taxonomy) && item.field_blog_taxonomy.length > 0 ? (
                    <ul className='flex flex-wrap gap-2'>
                      {item.field_blog_taxonomy?.map((taxonomy, index) => (
                        <li key={index} className='bg-gray-200 dark:bg-gray-700 rounded-md px-2 py-1 text-sm'>
                          {taxonomy.name}
                        </li>
                      ))}
                    </ul>
                  ) : (
                    <p className='text-sm text-gray-500'>No categories</p>
                  )}
                </div>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </div>
  );
};

export default Blog;
