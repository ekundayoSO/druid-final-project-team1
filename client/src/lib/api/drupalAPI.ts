import axios from 'axios';
import DOMPurify from 'dompurify';

const API_BASE_URL = 'https://druid-final-project-team1.lndo.site/jsonapi';

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
    field_content: {
      value: string;
    };
  };
}

const sanitizePageContent = (page: PageData) => ({
  ...page,
  attributes: {
    ...page.attributes,
    field_content: {
      ...page.attributes.field_content,
      value: DOMPurify.sanitize(page.attributes.field_content.value),
    },
  },
});

export const fetchPages = async () => {
  try {
    const response = await drupalAPI.get<ApiResponse>('/node/page');
    const sanitizedData = response.data.data.map(sanitizePageContent);
    return sanitizedData; // Returning the entire page data objects
  } catch (error) {
    console.error('Error fetching pages:', error);
    throw error;
  }
};
