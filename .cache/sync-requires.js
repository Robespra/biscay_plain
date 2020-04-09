const { hot } = require("react-hot-loader/root")

// prefer default export if available
const preferDefault = m => m && m.default || m


exports.components = {
  "component---cache-dev-404-page-js": hot(preferDefault(require("/Users/UXPAGES/Apps/biscay_plain/.cache/dev-404-page.js"))),
  "component---src-pages-404-js": hot(preferDefault(require("/Users/UXPAGES/Apps/biscay_plain/src/pages/404.js"))),
  "component---src-pages-books-js": hot(preferDefault(require("/Users/UXPAGES/Apps/biscay_plain/src/pages/books.js"))),
  "component---src-pages-contact-js": hot(preferDefault(require("/Users/UXPAGES/Apps/biscay_plain/src/pages/contact.js"))),
  "component---src-pages-index-js": hot(preferDefault(require("/Users/UXPAGES/Apps/biscay_plain/src/pages/index.js"))),
  "component---src-pages-legal-js": hot(preferDefault(require("/Users/UXPAGES/Apps/biscay_plain/src/pages/legal.js"))),
  "component---src-pages-submissions-js": hot(preferDefault(require("/Users/UXPAGES/Apps/biscay_plain/src/pages/submissions.js")))
}

