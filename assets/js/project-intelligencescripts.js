(function($) {
	$('.articles').imagesLoaded( function() {
		$('.articles').masonry({
			// options
			itemSelector: 'article'
		});
	});
})(jQuery);