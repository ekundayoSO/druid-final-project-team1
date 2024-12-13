
export interface EmployeeItem {
    id: string;
    type: string;
    field_service_image?: [{
      field_media_image: [{
        uri: { url: string };
        meta: { alt: string };
      }];
    }];
    field_employee_name?: {
      value: string;
    };
    field_employee_title?: {
      value: string;
    };
    field_content?: [{
      value: string;
    }];
  }