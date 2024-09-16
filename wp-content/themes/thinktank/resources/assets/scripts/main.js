// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick.min';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import specialties from './routes/specialties';
import postTypeArchiveStaff from './routes/postTypeArchiveStaff';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  specialties,
  postTypeArchiveStaff,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

