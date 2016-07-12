(function($) {
	$('.articles').imagesLoaded( function() {
		$('.articles').masonry({
			// options
			itemSelector: 'article',
			columnWidth: '.col-sm-3',
			percentPosition: true
		});
	});
})(jQuery);