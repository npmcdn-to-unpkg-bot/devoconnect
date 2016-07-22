(function($) {
	$('.articles').imagesLoaded( function() {
		$('.articles').masonry({
			// options
			itemSelector: 'article',
			columnWidth: '.column-width',
			percentPosition: true
		});
	});
})(jQuery);