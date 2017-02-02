var MootLazy = {
    $_items: null,
    offset: 200,
    isiPhone: ( (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) ),
    isAndroid: ( (navigator.userAgent.match(/Android/i)) ),

    init: function() {
        this.$_items = jQuery( '.lazy-me' );

        //iPhone offset
        if( this.isiPhone || window.innerWidth < 700 ) {
            this.offset = - window.innerHeight; // use 200 maybe on just android
        }

        if( this.isAndroid ) {
          this.offset = - window.innerHeight / 2;
        }

        this.$_items.each( function() {
            var $this = jQuery( this );
            var src = $this.data( 'src' );

            if( src ) {
                //Nothing to do
                if( src !== undefined ) {
                    $this.on( 'load', function() {
                        var $this = jQuery( this );

                        MootLazy.isVisible( jQuery( this ) );
                    }).attr( 'src', src );
                }
            } else {
                MootLazy.isVisible( jQuery( this ) );
            }
        });

        jQuery( document ).scroll( this.onScroll );

        // try iPad
        // jQuery( 'body' ).bind( 'touchmove',  );
        jQuery( 'body' ).on({ 'touchmove': this.onScroll }); // preferred binding method since jQuery >= 1.7
    },

    onScroll: function( e ) {
        MootLazy.$_items.each( function() {
            MootLazy.isVisible( jQuery( this ) );
        });
    },

    /*
     * In according to current page scroll value, check if the item is visible
     */
    isVisible: function( $item ) {
        //Page scroll value
        var scroll = jQuery( document ).scrollTop();
        var height = window.outerHeight;
        var pos = $item.data( 'origin' ) || $item.offset();

        var visible = pos.top <= ( height + scroll - MootLazy.offset );
        if( visible && ! $item.hasClass( 'visible' ) ) {
            $item.addClass( 'visible' );

            if( $item.parent().hasClass( 'animate-me' ) ) {
                setTimeout( function( $item ) {
                    $item.addClass( 'animate' );
                }, 1000, $item );
            }
        }
    }
};
