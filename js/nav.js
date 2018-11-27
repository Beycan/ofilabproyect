$(document).ready(function(){
	var altura = $('.interactive_menu').offset().top;

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.interactive_menu').addClass('menu-fixed');
		} else {
			$('.interactive_menu').removeClass('menu-fixed');
		}
	});

});
