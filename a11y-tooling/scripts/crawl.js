import fs from 'fs';
import SitemapGenerator from 'sitemap-generator';

// Your site URL
const baseUrl = 'http://kemahasiswaan.itb/';

// Create generator
const generator = SitemapGenerator(baseUrl, {
  stripQuerystring: true,
  maxDepth: 5, // adjust as needed
});

// Store URLs
const urls = [];

generator.on('add', (url) => {
  urls.push(url);
});

generator.on('done', () => {
  // Save URLs to file for pa11yci.json
  fs.writeFileSync(
    './a11y-reports/urls.json',
    JSON.stringify(urls, null, 2)
  );
  console.log(`✅ Found ${urls.length} URLs`);
});

// Start crawling
generator.start();
