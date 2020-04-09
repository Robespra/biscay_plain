// prefer default export if available
const preferDefault = m => m && m.default || m

exports.components = {
  "component---src-pages-404-js": () => import("../src/pages/404.js" /* webpackChunkName: "component---src-pages-404-js" */),
  "component---src-pages-books-js": () => import("../src/pages/books.js" /* webpackChunkName: "component---src-pages-books-js" */),
  "component---src-pages-contact-js": () => import("../src/pages/contact.js" /* webpackChunkName: "component---src-pages-contact-js" */),
  "component---src-pages-index-js": () => import("../src/pages/index.js" /* webpackChunkName: "component---src-pages-index-js" */),
  "component---src-pages-legal-js": () => import("../src/pages/legal.js" /* webpackChunkName: "component---src-pages-legal-js" */),
  "component---src-pages-submissions-js": () => import("../src/pages/submissions.js" /* webpackChunkName: "component---src-pages-submissions-js" */)
}

