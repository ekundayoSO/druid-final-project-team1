// DynamicContent.ts
export interface DynamicContent {
  field_content: Array<{ processed: string }>;
}

export interface LandingPageData {
  title: string;
  field_dynamic_content: DynamicContent;
}
