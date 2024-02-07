import axios from "axios";

const getNewsList = async () => {
  const baseUrl = 'https://nuonline.cms.nu.or.id/api/v3/articles?lang=id&limit=2';

  try {
    const news = await axios.get(baseUrl);
    console.log(news.data); // Logging the news data
    return news.data; // Returning the news data
  } catch (error) {
    console.error("Error fetching news:", error);
    return []; // Return an empty array or handle the error accordingly
  }
};

export default getNewsList;
