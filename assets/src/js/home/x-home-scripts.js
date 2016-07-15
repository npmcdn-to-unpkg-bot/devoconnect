(function($) {
	$('.articles').imagesLoaded( function() {
		
		var carousel = $(".carousel");
		carousel.carouFredSel({
			responsive: true,
			items: 1,
			scroll: {
				fx: "crossfade",
				duration: 1500
			},
			auto: 4000,
			prev: {
				button: ".prev",
				key: "left"
			},
			next: {
				button: ".next",
				key: "right"
			},
			onCreate : function () {
				$(window).on('resize', function(){
					carousel.parent().add(carousel).css('height', carousel.children().first().height() + 'px');
				}).trigger('resize');
			}
		});
	});	
})(jQuery);