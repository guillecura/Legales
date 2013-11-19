(function ($) {
	'use strict';
	var windowHeight,
		bgImgs;

	$(document).on('scroll', function (event) {
		var scrollTop = $(document).scrollTop();

		$('#home').css('background-position-y', scrollTop / 2);
	});
}(jQuery));
