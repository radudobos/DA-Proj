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
 * ======================================================================== */

(function($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function() {
                // JavaScript to be fired on all pages
                $('.quotes').slick({
                    dots: true,
                    prevArrow:false,
                    nextArrow:false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 6000,
                    speed: 800,
                    slidesToShow: 1,
                    adaptiveHeight: true
                  });
                  $( document ).ready(function() {
                    $('.no-fouc').removeClass('no-fouc');
                    });
                  
                /** Replace youtube embed with thumbnail **/
                $(".youtube").each(function() {

                    // Append the thumbnail image
                    $(this).append($('<img/>', {'src': 'http://i.ytimg.com/vi/' + this.id + '/sddefault.jpg'}));

                    // Overlay the Play icon to make it look like a video player
                    $(this).append($('<div/>', {'class': 'play'}));

                    $(document).delegate('#'+this.id, 'click', function() {
                        // Create an iFrame with autoplay set to true
                        var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";

                        if ($(this).data('params')) { 
                            iframe_url+='&'+$(this).data('params');
                        }

                        var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url });

                        // Replace the YouTube thumbnail with YouTube HTML5 Player
                        $(this).replaceWith(iframe);
                    });
                });
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function() {
                // JavaScript to be fired on the home page
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

