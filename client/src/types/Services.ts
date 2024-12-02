export interface Service {
  id: string;
  field_service_card_description: { value: string };
  field_service_card_title: { value: string };
}

export interface ReadMore {
  id: string;
  type: string;
  field_read_more?: ReadMoreItem[];
}

export interface ReadMoreItem {
  id: string;
  type: string;
  field_message?: {
    value: string;
  };
  field_short_heading?: [{
    value: string;
  }];
  field_content?: [{
    value: string;
  }];
  field_additional_infomation?: {
    uri: string;
    title: string;
  };
  field_service_image?: [{
    field_media_image: [{
      uri: { url: string };
      meta: { alt: string };
    }];
  }];
  field_customers_feedbacks?: {
    value: string;
  };
}