export interface MaintenanceDescription {
    processed: string;
  }
  
  export interface MaintenanceItem {
    id: string;
    field_long_description: MaintenanceDescription[];
  }
  