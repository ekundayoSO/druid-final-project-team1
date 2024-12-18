import { Link, useParams } from 'react-router-dom';
import { useFetchBlogs } from '@/hooks/useFetchBlogs';
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card';
import { drupalBaseUrl } from '@/hooks/useFetchBlogs';
import { BlogItem } from '@/types/BlogItem';

const BlogPost = () => {
  const { blogItems, isLoading, error } = useFetchBlogs();
  const { id } = useParams<{ id: string }>();

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div>Error: {error}</div>;

  const blogItem = blogItems.find((item: BlogItem) => item.id === id) as BlogItem | undefined;

  if (!blogItem) return <div>Blog post not found</div>;

  return (
    <div className='relative w-full min-h-screen overflow-auto bg-gray-200 dark:bg-gray-700 m-0 p-0'>
      <div className='flex flex-col items-center justify-center min-h-screen py-16'>
        <Card className='w-full max-w-3xl'>
          {blogItem?.field_hero_image && (
              <CardHeader>

            <img
              src={`${drupalBaseUrl}${blogItem.field_hero_image.uri.url}`}
              alt={blogItem.field_hero_image.meta?.alt || 'Hero Image'}
              className='w-full h-64 object-cover'
            />
            </CardHeader>
          )}
          <CardContent className='text-justify'>
            <CardHeader>
              <div className='flex justify-between mb-2'>
                <p className='text-sm text-gray-500 dark:text-gray-400'>
                  {new Date(blogItem.field_date_of_post ?? '')
                    .toLocaleDateString('en-GB', {
                      day: '2-digit',
                      month: '2-digit',
                      year: 'numeric',
                    })
                    .replace(/\//g, '.')}
                </p>
                <p className='text-sm text-gray-500 dark:text-gray-400'>{blogItem.field_author?.display_name}</p>
              </div>
              <h2>{blogItem.title || 'Untitled'}</h2>
              <CardDescription>{blogItem.field_short_description?.value}</CardDescription>
            </CardHeader>
            {blogItem.field_add_title_text_content_ima?.map((content) => {
              switch (content.type) {
                case 'paragraph--add_title':
                  return (
                    <h3 key={content.id} className='text-xl font-semibold mt-4'>
                      {content.field_add_title}
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
                        className='dark:text-gray-400 hover:underline'
                      >&rarr;&nbsp; 
                        {content.field_add_link?.title || 'Visit link'}
                      </a>
                    </div>
                  );
                default:
                  return null;
              }
            })}
            <div className="flex justify-end">
              <Link to="/blog" className="text-gray-500 hover:underline mb-4 inline-block">
                &larr; Back to Blog
              </Link>
            </div>
          </CardContent>
        </Card>
      </div>
    </div>
  );
};

export default BlogPost;
