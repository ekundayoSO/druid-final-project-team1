export interface FieldAddSection {
  value: string;
  format: string;
  processed: string;
}

export interface FieldImage {
  uri: {
    url: string;
  };
  meta: {
    alt?: string;
  };
}

export interface FieldServicesSection {
  field_add_section: FieldAddSection;
  field_section_image?: FieldImage;
  field_section_title?: string;
}

export interface ServicesData {
  title: string;
  field_services_section: FieldServicesSection[];
  field_services_hero_image?: FieldImage;
  field_testimonial_quote?: FieldAddSection;
  field_testimonial_author?: FieldAddSection;
  field_add_services_title?: FieldAddSection;
  field_additional_services: {
    field_icon?: FieldImage;
    field_description: FieldAddSection;
  }[];
}
