$(document).ready(function(){
	/* Para guardar altura */
	var altura = $('.menu').offset().top;
	
$(window).on('scroll',function(){
if($(window).scrollTop()>altura){
	$('.menu').addClass('menu-fixed');
} else {
	$('.menu').removeClass('menu-fixed');
}
});
});