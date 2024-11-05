import axios from 'axios';

const API_BASE_URL = 'http://druid-final-project-team1.lndo.site/jsonapi';

const drupalAPI = axios.create({
  baseURL: API_BASE_URL,
  headers: {
    'Content-Type': 'application/json',
  },
});

interface ApiResponse {
  data: PageData[];
}

interface PageData {
  attributes: {
    title: string;
    body: {
      value:string;
    }
    field_content: {
      value: string;
    };
  };
}

export const fetchPages = async () => {
  try {
    const response = await drupalAPI.get<ApiResponse>('/node/page');
    return response.data.data; // Directly returning the data without sanitization
  } catch (error) {
    console.error('Error fetching pages:', error);
    throw error;
  }
};
