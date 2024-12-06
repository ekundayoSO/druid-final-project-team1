export interface BlogItem {
  id: string;
  field_blog_taxonomy?: { name: string }[];
  field_hero_image?: {
    uri: {
      url: string;
    };
    meta?: {
      alt?: string;
    };
  };
  field_date_of_post?: string;
  field_author?: {
    display_name?: string;
  };
  title: string;
  field_short_description?: {
    value: string;
  };
  field_add_title_text_content_ima?: Array<{
    id: string;
    type: string;
    field_add_title?: string;
    field_add_textfield?: { value: string };
    field_add_link?: { uri: string; title?: string };
  }>;
}
