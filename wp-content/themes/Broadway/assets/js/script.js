$(window).ready(function(){

	//simple scrollTo animation
	$('.menu-item > a').click(function(event){
		event.preventDefault();

		$('html,body').animate({
			scrollTop: ($(this.hash).offset().top - 50)
		}, 500, 'swing');

	});
});

$(window).scroll(function(){

	var scrollPosition = $(window).scrollTop();
	var mainMenu = $('.main_nav');

	//check what the scroll position is for the menu
	if(scrollPosition > 0){
		
		mainMenu.css({ 'box-shadow': '0 2px 5px #555' });
	}
	if(scrollPosition === 0){
		mainMenu.css({ 'box-shadow': 'none' });
	}
});