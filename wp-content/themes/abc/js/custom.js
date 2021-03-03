AOS.init();
feather.replace({ 'stroke-width': 1 });
const player = new Plyr('#player');

( function( $ ) {
    $( document ).ready(function() {
        $('.slick-front').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            swipeToSlide: true,
            responsive: [
                {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                }
                },
                {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
                }
            ]
        });
        $('.slick-x4').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            swipeToSlide: true,
            responsive: [
                {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                }
                },
                {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    infinite: true,
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
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
            'origin': '//abc.ayarsava.com.ar',
            'displayDuration': true,
            'clickToPlay': false,
            'controls':['play-large','play','current-time','mute','fullscreen'],
            'autoplay':true,
            }
        );
        })
    });
    
    $( ".vid-player" ).append( '<button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg aria-hidden="true" focusable="false"><svg id="plyr-play" viewBox="0 0 18 18"><path d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"></path></svg></svg></button>' );

    $( document ).ready(function() {
        
            function parseVideoURL(url) {           
                function getParm(url, base) {
                    var re = new RegExp("(\\?|&)" + base + "\\=([^&]*)(&|$)");
                    var matches = url.match(re);
                    if (matches) {
                        return(matches[2]);
                    } else {
                        return("");
                    }
                }
                
                var retVal = {};
                var matches;
                
                if (url) {
                    if (url.indexOf("youtube.com" || "youtu.be") != -1) {
                        retVal.provider = "youtube";
                        retVal.id = getParm(url, "v");
                    } else if (matches = url.match(/vimeo.com\/(\d+)/)) {
                        retVal.provider = "vimeo";
                        retVal.id = matches[1];
                    }
                }
                return(retVal);
            }
            
            if($('[id*="player"]').length){
                var iframe = document.getElementById("player");
                var videourl = $('#player').attr('data-url');
                var video = parseVideoURL(videourl);
                if(video.provider == 'youtube'){
                    iframe.innerHTML += "<iframe src='https://www.youtube.com/embed/" + video.id +"?origin=http://abc.ayarsava.com.ar/&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1' allowfullscreen allowtransparency allow='autoplay'></iframe>";
                } else if(video.provider == 'vimeo'){
                    iframe.innerHTML += "<iframe src='https://player.vimeo.com/video/" + video.id +"?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media' allowfullscreen allowtransparency allow='autoplay'></iframe>";
                }
                const player = new Plyr('[id*="player"]');
            }

            if($('.vid-player').length){
                $('.vid-player').each(function() {
                    var postid = $(this).attr('id');
                    var plyr = document.getElementById(postid);
                    var videourl = $(this).attr('data-url');
                    var video = parseVideoURL(videourl);
                    if(video.provider == 'youtube'){
                        plyr.setAttribute("data-plyr-provider", video.provider);
                        plyr.setAttribute("data-plyr-embed-id", video.id);
                        plyr.setAttribute("style", "background-image: url('//i.ytimg.com/vi/"+video.id+"/maxresdefault.jpg');");
                    } else if(video.provider == 'vimeo'){
                        $.getJSON('https://vimeo.com/api/oembed.json?url=https%3A//vimeo.com/' + video.id, {
                            format: "json",
                            width: "640"
                        },
                        function(data) {
                            plyr.setAttribute("style", "background-image: url('"+data.thumbnail_url+";'");
                        });
                        
                        plyr.setAttribute("data-plyr-provider", video.provider);
                        plyr.setAttribute("data-plyr-embed-id", video.id);
                    }
                });
            }
            
    });
    
    if($(".wp-block-embed-youtube")){
        $('iframe[src*="youtube"]').wrap(
        "<div class='embed-responsive embed-responsive-16by9'></div>"
        ).addClass("embed-responsive-item");
      
        $('iframe[src*="vimeo"]').wrap(
        "<div class='embed-responsive embed-responsive-16by9'></div>"
        ).addClass("embed-responsive-item");
    }


})( jQuery );




