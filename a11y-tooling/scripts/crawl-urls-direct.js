import fs from 'fs';
import SitemapGenerator from 'sitemap-generator';

// Base URL of your site
const baseUrl = 'http://kemahasiswaan.itb/';

// Output file
const outputFile = './a11y-reports/urls.txt';

// Array to store URLs
const urls = [];

// Create the generator
const generator = SitemapGenerator(baseUrl, {
  stripQuerystring: true,
  maxDepth: 5, // increase if you want to crawl deeper
  filepath: null, // do not write sitemap.xml
});

// On each page found
generator.on('add', (url) => {
  if (!urls.includes(url)) {
    urls.push(url);
  }
});

// When finished
generator.on('done', () => {
  // Save plain URLs, one per line
  fs.writeFileSync(outputFile, urls.join('\n'));
  console.log(`✅ Crawl finished. Found ${urls.length} URLs.`);
  console.log(`📄 Saved to ${outputFile}`);
});

// Start crawling
generator.start();
