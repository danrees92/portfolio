$(window).scroll (function () {
	var top = $(this).scrollTop();
		if (top >= 150) {
			$('header').addClass('scroll')
		} else {
			$('header').removeClass('scroll')
		}
}); 