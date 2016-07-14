(function($) {
	
	// External links
	$('a[href^="http://"],a[href^="https://"]')
		.attr({
		target: "_blank"
	  });
		$('a[href^="http://www.devo"], a[href^="http://devo"]')
	  .attr({
		target: "_self"
	  });

	  // open in new window if external or pdf
	$(".container a[href$='pdf'], .container a[href$='doc'], .container a[href$='docx'], .container a[href$='xls'], .container a[href$='xlsx").attr('target','_blank');
	
})(jQuery);	