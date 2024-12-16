export interface ConsultationItem {
    id: string;
    field_consultation?: Array<{
      type: string;
      id: string;
      field_add_image?: [{
        field_media_image: [{
          uri: { url: string };
          meta: { alt: string };
        }];
      }];
      field_short_heading?: [{
        value: string;
      }];
      field_content?: [{
        value: string;
      }];
      field_consultation: ConsultationParagraph[];
    }>;
    
  }

  export type ConsultationParagraph = {
    type: string;
    id: string;
    field_add_image?: { field_media_image: { uri: { url: string }; meta: { alt: string } }[] }[];
    field_short_heading?: { value: string }[];
    field_content?: { value: string }[];
  };
  