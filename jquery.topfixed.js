
$(function() {
	    $(document).on('click', '.close_btn', function() {
	        $('.slicknav_menu a').addClass('slicknav_collapsed');
	        $('.slicknav_menu a').removeClass('slicknav_open');
	        $('.slicknav_nav').css('display','none').addClass('slicknav_hidden');
	        $('.slicknav_nav').attr('aria-hidden','true');
	    })

	$('.wraphead').wrapInner('<div class="inbox" />');

	var $win = $(window),
			$main = $('#KeyVisual'),
			$nav = $('.wraphead .inbox'),
			navHeight = $nav.outerHeight(),
			navPos = $nav.offset().top,
			fixedClass = 'is-fixed';

});
