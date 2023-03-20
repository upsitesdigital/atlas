/*
 * Plugins
 */
import 'slick-carousel';
// import 'selectric';
import svg4everybody from 'svg4everybody';

/**
 * Modules
 */
import slider from './modules/slider';

/**
 * Vendors
 */
// import plugins           from './vendor/plugins';

/**
 * Pages
 */
import app from './pages/_app';


(($) => {
  'use strict';

  $(() => {
    svg4everybody();
    slider();
    // plugins();
    app();
  });
})(jQuery);