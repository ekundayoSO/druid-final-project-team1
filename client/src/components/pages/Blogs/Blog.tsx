import { useState } from 'react';
import { useFetchBlogs, drupalBaseUrl } from '@/hooks/useFetchBlogs';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from '@/components/ui/card';
import { Button } from '@/components/ui/button';
import { useNavigate } from 'react-router-dom';
import { BlogItem } from '@/types/BlogItem';

const Blog = () => {
  const { blogItems, isLoading, error } = useFetchBlogs();
  const navigate = useNavigate();
  const [selectedCategory, setSelectedCategory] = useState<string | null>(null);

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

  const filteredBlogItems = selectedCategory
    ? blogItems.filter(
        (item: BlogItem) =>
          Array.isArray(item.field_blog_taxonomy) && item.field_blog_taxonomy.some((t) => t.name === selectedCategory)
      )
    : blogItems;

  const handleCardClick = (id: string) => {
    navigate(`/blog/${id}`);
  };

  const handleCategoryClick = (category: string) => {
    setSelectedCategory(selectedCategory === category ? null : category);
  };

  return (
    <div className="relative w-full min-h-screen overflow-auto bg-gray-200 dark:bg-gray-700 m-0 p-0">
      <div className="flex flex-col items-center justify-center min-h-screen py-16">
        <h1 className="max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 dark:text-gray-100 text-center p-3 leading-tight">
          Blogs
        </h1>
        <p className="text-gray-700 dark:text-gray-300 mb-8 text-center max-w-xl">
          Writings on and off topic – about our everyday life, culture, and the world of software development
        </p>

        <div className="flex justify-center space-x-4 mb-8">
          {categories.map((category) => (
            <Button
              key={category}
              variant={selectedCategory === category ? 'default' : 'outline'}
              onClick={() => handleCategoryClick(category)}
            >
              {category}
            </Button>
          ))}
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 max-w-screen-xl mx-auto px-4 ">
          {filteredBlogItems.map((item: BlogItem) => (
            <Card
              key={item.id}
              className="w-full cursor-pointer transition ease-in-out delay-150 flex flex-col min-h-[500px]"
              onClick={() => handleCardClick(item.id)}
            >
              {item.field_hero_image && (
                <CardHeader className="overflow-hidden">
                  <img
                    src={`${drupalBaseUrl}${item.field_hero_image.uri.url}`}
                    alt={item.field_hero_image.meta?.alt || 'Hero Image'}
                    className="w-full aspect-[16/9] object-cover object-center rounded-lg"
                  />
                </CardHeader>
              )}
              <CardContent className="flex flex-col flex-1">
                <CardHeader>
                  <div className="flex justify-between mb-2">
                    <p className="text-sm text-gray-500 dark:text-gray-400">
                      {item.field_date_of_post &&
                        new Date(item.field_date_of_post)
                          .toLocaleDateString('en-GB', {
                            day: '2-digit',
                            month: '2-digit',
                            year: 'numeric',
                          })
                          .replace(/\//g, '.')}
                    </p>
                    <p className="text-sm text-gray-500 dark:text-gray-400">{item.field_author?.display_name}</p>
                  </div>
                  <CardTitle>{item.title || 'Untitled'}</CardTitle>
                  <CardDescription>{item.field_short_description?.value}</CardDescription>
                </CardHeader>
                <div className="mt-auto pt-4">
                  {Array.isArray(item.field_blog_taxonomy) && item.field_blog_taxonomy.length > 0 ? (
                    <ul className="flex flex-wrap gap-2">
                      {item.field_blog_taxonomy?.map((taxonomy, index) => (
                        <li key={index} className="bg-gray-200 dark:bg-gray-700 rounded-md px-2 py-1 text-sm">
                          {taxonomy.name}
                        </li>
                      ))}
                    </ul>
                  ) : (
                    <p className="text-sm text-gray-500">No categories</p>
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
