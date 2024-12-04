export type Career = {
  id: string;
  title: string;
  field_careers: Array<ParagraphItem>;
};

export type ParagraphItem = {
  id: string;
  type: string;
  field_service_image?: Array<{
    field_media_image: Array<{
      uri: { url: string };
      meta: { alt?: string };
    }>;
  }>;
  field_message?: { value?: string };
  field_short_heading?: Array<{ value?: string }>;
  field_content?: Array<{ value?: string }>;
  field_long_description?: { value?: string }; 
};

export type ServicesImagesProps = {
  item: ParagraphItem;
};

export type HeroMessageProps = {
  item: ParagraphItem;
  title: string;
};

export type Topic = {
  item: ParagraphItem;
  id: string;
  field_topic_title: string;
  field_topic_content: string;
};

export type LongDescriptionProps = {
    item: ParagraphItem;
    id: string;
    field_long_description?: {
      value?: string;
    };

};

