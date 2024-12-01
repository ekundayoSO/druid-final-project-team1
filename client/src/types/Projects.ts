export interface CardImage {
  uri: {
    url: string;
  };
  meta?: {
    alt: string;
  };
}

export interface ServiceTaxonomy {
  id: string;
  name: string;
}

export interface Case {
  id: string;
  title: string;
  field_card_description: {
    processed: string;
  };
  field_card_image: CardImage;
  field_services_taxonomy: ServiceTaxonomy[];
}

export interface Link {
  uri: string;
  title: string;
}

export interface ProjectDescription {
  id: string;
  type: string;
  field_name?: {
    value: string;
  };
  field_short_heading?: [{
    value: string;
  }];
  field_content?: [{
    value: string;
  }];
  field_service_image?: [{
    field_media_image: [{
      uri: { url: string };
      meta: { alt: string };
    }];
  }];
}

export interface CaseDetail extends Case {
  field_client?: string;
  field_hero_image: CardImage;
  field_link?: Link;
  field_project_description?: ProjectDescription[];
}
