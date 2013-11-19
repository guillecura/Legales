(function ($) {
	"use strict";
	var windowHeight,
		bgImgs;

	$(document).on("scroll", function (event) {
		var scrollTop = $(document).scrollTop(),
			scrollMod = scrollTop / ($(document).height() - 100) * 13;

		$('#home').css('background-position-y', scrollTop / 2);
	});


	$("a[href*=#]").on("click", function (e) {
		if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
			var targetOffset, 
				$target = $(this.hash);
			$target = $target.length && $target || $("[name=" + this.hash.slice(1) + "]");
			
			if ($target.length) {
				targetOffset = $target.offset().top;
				$("html, body").animate({
					scrollTop: targetOffset
				}, 400);

				return false;
			}
		}
	});
}(jQuery));
