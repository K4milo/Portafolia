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
			$('.row.slider p strong').css('opacity', '1');
		});

		//read more

		$('.row').each(function(index, el) {
			$(this).find('.toggleBtn').click(function(event) {
				/* Act on the event */
				event.preventDefault();
				$('.long-text').toggle(400);
				$(this).fadeOut(500);
			});
		});

		if ($(window).width() < 767) {
			$('.service-square').click(function(event) {
				$(this).toggleClass('show-back');
			});
		}
		

		$('.page-template-wesay .content header h2').click(function(event) {
			$('.page-template-wesay .content p').fadeIn(300);
		});

		$('.share-feed').click(function(event) {
			$(this).find('.share-prompt').toggle(500);
		});

		//Hashes scroll
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function(event) {
			// On-page links
			if (
			  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			  && 
			  location.hostname == this.hostname
			) {
			  // Figure out element to scroll to
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			  // Does a scroll target exist?
			  if (target.length) {
			    // Only prevent default if animation is actually gonna happen
			    event.preventDefault();
			    $('html, body').animate({
			      scrollTop: target.offset().top
			    }, 1000, function() {
			      // Callback after animation
			      // Must change focus!
			      var $target = $(target);
			      $target.focus();
			      if ($target.is(":focus")) { // Checking if the target was focused
			        return false;
			      } else {
			        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
			        $target.focus(); // Set focus again
			      };
			    });
			  }
			}
		});

	});

}(jQuery));
