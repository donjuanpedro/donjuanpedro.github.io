export default async function sitemap() {

  let routes = ['', '/uses', '/work', '/contact'].map((route) => ({
    url: `https://walkerlyle.com${route}`,
    lastModified: new Date().toISOString().split('T')[0],
  }));

  return [...routes];
}
