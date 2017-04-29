(function ($) {
	
	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");
	
		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');
		
		// You can put your own code in here

		new WOW().init();

		$(window).load(function() {
			$('.row.slider > strong').css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 400);
		});

		//read more
		$('.blackBtn').click(function(event) {
			/* Act on the event */
			event.preventDefault();
			$('.long-text').toggle(400);
			$(this).fadeOut(500);
		});

	});

}(jQuery));
