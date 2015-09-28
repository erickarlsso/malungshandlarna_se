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
  var malungshandlarna = {
    // All pages
    'common': {
      init: function() {


        // expander-function
        $expanderToggle = $('.expander--toggle');
        $expanderContent = $('.expander--content');

        $expanderToggle.click(function(){
          $('.expander').toggleClass("expander--open");
        });

        // navbar--toggle
        $navToggle = $('.navbar--toggle');
        $navToggle.click(function() {
          $('body').toggleClass('nav--open');
          return false;
        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {

        $(document).ready(sizeContent);
        $(window).resize(sizeContent);

        function sizeContent() {
            var newHeight = $("html").height() - $(".header-wrapper").height() + "px";
            $(".feature--video").css("height", newHeight);
        }

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Shops page
    'page_template_template_shops': {
      init: function() {

        $("a[role='tab']").click(function(){
        	$("a[role='tab']").attr("aria-selected","false"); //deselect all the tabs
         	$(this).attr("aria-selected","true");  // select this tab
        	var tabpanid= $(this).attr("aria-controls"); //find out what tab panel this tab controls
           var tabpan = $("#"+tabpanid);
        	$("div[role='tabpanel']").attr("aria-hidden","true"); //hide all the panels
        	tabpan.attr("aria-hidden","false");  // show our panel
        });

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Shop page
    'single_medlemmar': {
      init: function() {

        (function($) {

          function render_map( $el ) {

            var $markers = $el.find('.marker');
            var args = {
              scrollwheel: false,
              zoom		: 16,
              center		: new google.maps.LatLng(0, 0),
              mapTypeId	: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map( $el[0], args);

            map.markers = [];

            $markers.each(function(){

                add_marker( $(this), map );

            });

            center_map( map );

        }

          function add_marker( $marker, map ) {

            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
            var marker = new google.maps.Marker({
              position	: latlng,
              map			: map
            });

            map.markers.push( marker );

            if( $marker.html() ) {

              var infowindow = new google.maps.InfoWindow({
                content		: $marker.html()
              });

              google.maps.event.addListener(marker, 'click', function() {

                infowindow.open( map, marker );

              });
            }

          }

          function center_map( map ) {

            var bounds = new google.maps.LatLngBounds();

            $.each( map.markers, function( i, marker ){

              var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

              bounds.extend( latlng );

            });

            if( map.markers.length == 1 ) {
                map.setCenter( bounds.getCenter() );
                map.setZoom( 16 );
            }
            else {
              map.fitBounds( bounds );
            }

          }

          $(document).ready(function(){

            $('.map').each(function(){

              render_map( $(this) );

            });

          });

        })(jQuery);

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },

  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = malungshandlarna;
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
