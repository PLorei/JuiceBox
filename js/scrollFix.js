$(document).ready(function () {
  var menu = $('.site-nav');
  var menuTop = menu.offset().top;

	$(window).scroll(function(){
		  if ( $(window).scrollTop() >= menuTop){
        menu.addClass('fixed');
        $("#header-wrap").css("padding-bottom", menu.css("height"));
		} else {
		    menu.removeClass('fixed');
        $("#header-wrap").css("padding-bottom", "0px");
		}
	});
});
