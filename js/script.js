/*global document, jQuery*/
(function ($) {
	'use strict';

	$(document).on('scroll', function () {
		$('#home').css('background-position-y', $(document).scrollTop() / 2);
	});

}(jQuery));
