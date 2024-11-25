export interface BlogItem {
  id: string;
  field_blog_taxonomy?: { name: string }[];
  field_hero_image?: { uri: { url: string }; meta: { alt?: string } };
  field_author?: { display_name: string };
  field_date_of_post?: string;
  field_add_title?: string;
  field_short_description?: { value: string };
}
