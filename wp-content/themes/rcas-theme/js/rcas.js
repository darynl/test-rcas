$(window).load(function () {
	$("#myCarousel").mouseenter(function() {
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

    $(".fsm").css('color', 'white');
});
