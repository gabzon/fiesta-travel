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

(function ($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function () {
                function initialize() {
                    var input = document.getElementById('destination');
                    var options = {
                        types: ['(cities)'],
                        language: 'fr',
                    };
                    var autocomplete = new google.maps.places.Autocomplete(input, options);
                }

                google.maps.event.addDomListener(window, 'load', initialize);

                $('.gallery').owlCarousel({
                    //navigation : true, // Show next and prev buttons
                    slideSpeed: 300,
                    autoPlay: 3000,
                    stopOnHover: true,
                    paginationSpeed: 400,
                    singleItem: true,
                    autoHeight: true,
                    transitionStyle: "fade"
                });

                $("#promotions-crousel").owlCarousel({
                    items: 3,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3]
                });

                $('a[href*=#]:not([href=#])').click(function () {
                    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: (target.offset().top) - ($("header").outerHeight())
                            }, 1000);
                            return false;
                        }
                    }
                });

                $(window).scroll(function () {
                    if ($(this).scrollTop() > 1) {
                        $('header').addClass("stick");
                    }
                    else {
                        $('header').removeClass("stick");
                    }
                });

                var frominput = $('#departure').pickadate({
                    min: 1
                });
                var toinput = $('#return').pickadate();

                var frompicker = frominput.pickadate('picker');
                var topicker = toinput.pickadate('picker');


                if (frompicker.get('value')) {
                    topicker.set('min', frompicker.get('select'));
                }
                if (topicker.get('value')) {
                    frompicker.set('max', topicker.get('select'));
                }


                frompicker.on('set', function (event) {
                    console.log(event);
                    if (event.select) {
                        topicker.set('min', frompicker.get('select'));
                    }
                });

                topicker.on('set', function (event) {
                    if (event.select) {
                        frompicker.set('max', topicker.get('select'));
                    }
                });

                $('#sidebar-toggle').on('click', function (event) {
                    $('.left.sidebar').sidebar('toggle');
                });

                $('.left.sidebar .item').on('click', function (event) {
                    $('.left.sidebar').sidebar('hide');
                });

                $('.ui .checkbox').checkbox();

                $('select.dropdown').dropdown();
                // Slider --------------------
                function collision($div1, $div2) {
                    var x1 = $div1.offset().left;
                    var w1 = 40;
                    var r1 = x1 + w1;
                    var x2 = $div2.offset().left;
                    var w2 = 40;
                    var r2 = x2 + w2;

                    if (r1 < x2 || x1 > r2){
                        return false;
                    }
                    return true;
                }

                // // slider call
                $('#price-slider').slider({
                    range: true,
                    min: 0,
                    max: 8000,
                    values: [ 500, 5000 ],
                    slide: function(event, ui) {

                        $('.ui-slider-handle:eq(0) .price-range-min').html('CHF ' + ui.values[ 0 ]);
                        $('.ui-slider-handle:eq(1) .price-range-max').html('CHF ' + ui.values[ 1 ]);
                        $('.price-range-both').html('<i>CHF ' + ui.values[ 0 ] + ' - </i>CHF ' + ui.values[ 1 ] );

                        if ( ui.values[0] === ui.values[1] ) {
                            $('.price-range-both i').css('display', 'none');
                        } else {
                            $('.price-range-both i').css('display', 'inline');
                        }

                        if (collision($('.price-range-min'), $('.price-range-max')) === true) {
                            $('.price-range-min, .price-range-max').css('opacity', '0');
                            $('.price-range-both').css('display', 'block');
                        } else {
                            $('.price-range-min, .price-range-max').css('opacity', '1');
                            $('.price-range-both').css('display', 'none');
                        }

                    }
                });

                $('.ui-slider-range').append('<span class="price-range-both value"><i>CHF' + $('#price-slider').slider('values', 0 ) + ' - </i>' + $('#price-slider').slider('values', 1 ) + '</span>');

                $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">CHF ' + $('#price-slider').slider('values', 0 ) + '</span>');

                $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">CHF ' + $('#price-slider').slider('values', 1 ) + '</span>');


                $(function () {
                    $('.mobile-menu').on('click', function () {
                        $('#mobile-sidebar').sidebar('toggle');
                    });
                    $('#side-menu').on('click', function () {
                        $('.book.sidebar').sidebar('toggle');
                    });
                });

                $('.secondary.menu .item').tab();

                $('.message .close').on('click', function () {
                    $(this).closest('.message').fadeOut();
                });


            },

            finalize: function () {

                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function () {
                
                function ajaxSubmit(){
                    var newRequest = $(this).serialize();
                    $.ajax({
                        type:"POST",
                        url: sage_vars.ajaxurl,
                        data: newRequest,
                        success:function(data){
                            alert('succes');
                            $("#feedback").html(data);
                        }
                    });

                    return false;
                }
                $('#newRequest').submit(ajaxSubmit);
            },

            finalize: function () {
                  // JavaScript to be fired on the home page, after the init JS
            }
        },
        // About us page, note the change from about-us to about_us.
        'about_us': {
            init: function () {
                // JavaScript to be fired on the about us page
            }
        },
        'catalog': {
            init: function () {
                $('.dimmable-image .image').dimmer({ on: 'hover' });
            }
        },
        'single-product': {
            init: function () {

            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function (func, funcname, args) {
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
        loadEvents: function () {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
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
