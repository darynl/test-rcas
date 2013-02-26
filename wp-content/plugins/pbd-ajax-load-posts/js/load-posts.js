jQuery(window).ready(function($) {

	// The number of the next page to load (/page/x/).
	pageNum = parseInt(pbd_alp.startPage) + 1;
	
	// The maximum number of pages the current query can return.
	max = parseInt(pbd_alp.maxPages);
	
	// The link of the next page of posts.
	nextLink = pbd_alp.nextLink;
	
	/**
	 * Replace the traditional navigation with our own,
	 * but only if there is at least one page of new posts to load.
	 */
	if(pageNum <= max) {
		// Insert the "More Posts" link.
		$('#mason')
			.append('<div class="pbd-alp-placeholder-'+ pageNum +'"></div>')
			.append('<p id="pbd-alp-load-posts"><a href="#" style="width:100%;">Load More Posts</a></p>');
			
		// Remove the traditional navigation.
		$('.navigation').remove();
	}

	$('#pbd-alp-load-posts').css({'position' :'absolute', 'bottom': '0', 'width': '100%' , 'margin-bottom': '-40px'});

	
	/**
	 * Load new posts when the link is clicked.
	 */
	$('#pbd-alp-load-posts a').click(function() {
		
		// Are there more posts to load?
		if(pageNum <= max) {
		
			// Show that we're working.
			$(this).text('Loading posts...');
			
			$.ajax({
			  url: nextLink,
			  dataType: 'html'
			}).done(function(data) {
					var $boxes = $(data).find('.box-container');
					$($boxes).imagesLoaded( function(){
						$('#mason').append($boxes).masonry('appended', $boxes);
					});
					$('.pbd-alp-placeholder-'+ pageNum).remove();

					pageNum++;
					nextLink = nextLink.replace(/paged\=[0-9]*/, 'paged='+ pageNum);
					
					// Add a new placeholder, for when user clicks again.
					$('#pbd-alp-load-posts')
						.before('<div class="pbd-alp-placeholder-'+ pageNum +'"></div>')
					
					// Update the button message.
					if(pageNum <= max) {
						$('#pbd-alp-load-posts a').text('Load More Posts');
					} else {
						$('#pbd-alp-load-posts a').text('No more posts to load.');
					}
				}
			);

		} else {
			$('#pbd-alp-load-posts a').append('.');
		}	
		
		return false;
	});
});