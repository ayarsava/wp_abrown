AOS.init();
const player = new Plyr('#player');
feather.replace({ 'stroke-width': 1 });

( function( $ ) {
    $( document ).ready(function() {
        $('.slick-front').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            centerPadding: 0,
            responsive: [
                {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
                },
                {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
                }
            ]
        });
        $('.slick-x4').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            centerPadding: 0,
            responsive: [
                {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
                },
                {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
                }
            ]
        });
    });

    $('.vid-player').each( function(){
        var player_id = $(this).attr('id');
        $(this).on('click', function(){ 
        console.log(player_id);
        const players = Plyr.setup(
            '#' + player_id, {
            'origin': '//www.ayarsava.com.ar',
            'displayDuration': true,
            'clickToPlay': false,
            'controls':['play-large','play','current-time','mute','fullscreen'],
            'autoplay':true,
            }
        );
        })
    });
    
    $( ".vid-player" ).append( '<button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg aria-hidden="true" focusable="false"><svg id="plyr-play" viewBox="0 0 18 18"><path d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"></path></svg></svg></button>' );
})( jQuery );


