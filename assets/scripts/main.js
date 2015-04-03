/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
          $("#promotions-crousel").owlCarousel({
              items : 3,
              itemsDesktop : [1199,3],
              itemsDesktopSmall : [979,3]
          });

          $('.gallery').owlCarousel({
              navigation : true, // Show next and prev buttons
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem:true
          });

          $('a[href*=#]:not([href=#])').click(function() {
              if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                      $('html,body').animate({
                          scrollTop: (target.offset().top) - ($("header").outerHeight())
                      }, 1000);
                      return false;
                  }
              }
          });

          $(window).scroll(function() {
              if ($(this).scrollTop() > 1){
                  $('header').addClass("stick");
              }
              else{
                  $('header').removeClass("stick");
              }
          });

          var frominput = $('#departure').pickadate({
              min : 1
          });
          var toinput = $('#return').pickadate();

          var frompicker = frominput.pickadate('picker');
          var topicker = toinput.pickadate('picker');

          //Get the defaults value if are set
          if ( frompicker.get('value') ) {
              topicker.set('min', frompicker.get('select'));
          }
          if ( topicker.get('value') ) {
              frompicker.set('max', topicker.get('select'));
          }

          // When something is selected, update the “from” and “to” limits.
          frompicker.on('set', function(event) {
              console.log(event);
              if ( event.select ) {
                  topicker.set('min', frompicker.get('select'));
              }
          });
          topicker.on('set', function(event) {
              if ( event.select ) {
                  frompicker.set('max', topicker.get('select'));
              }
          });

          $('#sidebar-toggle').on('click', function(event){
              $('.left.sidebar').sidebar('toggle');
          });

          $('.left.sidebar .item').on('click', function(event){
              $('.left.sidebar').sidebar('hide');
          });

      },
      finalize: function() {


        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
