jQuery(function() {
  var Page = (function() {
    var $navArrows = jQuery( '#nav-arrows' ),
      $nav = jQuery( '#nav-dots > span' ),
      slitslider = jQuery( '#slider' ).slitslider( {
        onBeforeChange : function( slide, pos ) {
          $nav.removeClass( 'nav-dot-current' );
          $nav.eq( pos ).addClass( 'nav-dot-current' );
        }
      } ),
      init = function() {
        initEvents();
        jQuery('html').removeClass('nojs');
      },
      initEvents = function() {
        // add navigation events
        $navArrows.children( ':last' ).on( 'click', function() {
          slitslider.next();
          return false;
        } );
        $navArrows.children( ':first' ).on( 'click', function() {
          slitslider.previous();
          return false;
        } );
        $nav.each( function( i ) {
          jQuery( this ).on( 'click', function( event ) {
            var $dot = jQuery( this );
            if( !slitslider.isActive() ) {
              $nav.removeClass( 'nav-dot-current' );
              $dot.addClass( 'nav-dot-current' );
            }
            slitslider.jump( i + 1 );
            return false;
          } );
        } );
      };
      return { init : init };
  })();
  Page.init();
});