$(window).load(function () {
	$("#myCarousel").carousel('cycle').mouseenter(function() {
		$(".carousel-control").fadeIn();
	}).mouseleave(function() {
		$(".carousel-control").fadeOut();
	})

    $(function(){
        $('#mason').masonry({
            // options
            itemSelector : '.box-container',
            isAnimate: true
        });
    });

    
    var $window = $(window);

    $window.bind("scroll", function() {
        var scrollTop = $window.scrollTop();
        if (scrollTop >= $(".rcas-navbar").offset().top) {
            $(".rcas-navbar-hidden").css('display', 'block');
        } else {
            $(".rcas-navbar-hidden").css('display', 'none');
        }
    })

    // /* FB pile font*/
    // $(".fsm").css('color', 'white');

    /* Twitter Feed size */
    // $(".span4 iframe#twitter-widget-0").contents().children().ready(function() {
    //     $(".span4 iframe#twitter-widget-0").css("height", '187px');
    //     $(".span4 iframe#twitter-widget-0").contents().children().find(".stream").height(110);
    // });

    /* Pause youtube when carouseling */ 
    $(".carousel-control").click(function(){
        player.pauseVideo();
    });

    $(".categories").css('display', 'block');
    // $('.network-logos').css('border-color', '#FFFFFF');
    // setTimeout(function(){
    
    //     var div = $('.network-logos');
    //     $({alpha:1}).animate({alpha:0}, {
    //         duration: 1000,
    //         step: function(){
    //             div.css('border-color','rgba(0,0,0,'+this.alpha+')');
    //         }
    //     });
        
    // }, 10000);

    $(".network-box").tooltip({
        placement: 'left'
    })

    if ($("#counter").length ) {
        // var newYear = new Date(); 
        // newYear.setFullYear(2013); 
        // newYear.setMonth(03);
        // newYear.setDate(22);
        // $('#counter').countdown({until: newYear, format: 'WDHMS'}); 
        var newYear = new Date(2013, 02, 22);
        $('#counter').countdown({
            timestamp   : newYear   
        });

    };
    
});
