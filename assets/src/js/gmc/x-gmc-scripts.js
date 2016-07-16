(function($) {
	
	$('.gallery').imagesLoaded( function() {
		$('.gallery').masonry({
			// options
			itemSelector: '.gallery-item',
			columnWidth: '.col-sm-3',
			percentPosition: true
		});
	});
	
})(jQuery);