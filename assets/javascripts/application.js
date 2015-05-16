$(function(){
	$("ul#tabs li").click(function(e){
		if (!$(this).hasClass("active")) {
			var tabNum = $(this).index();
			var nthChild = tabNum+1;
			$("ul#tabs li.active").removeClass("active");
			$(this).addClass("active");
			$("ul#tab li.active").removeClass("active");
			$("ul#tab li:nth-child("+nthChild+")").addClass("active");
		}
	});

	$('.cycle-slideshow').cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 5000, 
    next:   '#next', 
    prev:   '#prev' 
	});

});

$(document).ready(function(){
	$('.slider1').bxSlider({
		slideWidth: 360,
    minSlides: 3,
    maxSlides: 3,
    moveSlides: 3,
		infiniteLoop: false,
		wrapperClass: 'bx-wrapper',
		controls: true,
		nextText: 'Next',
		prevText: 'Prev'
	});
	$('.bx-wrapper').css('max-width', '');
});



/*global jQuery:false */
$(document).ready(function($) {
"use strict";

		//add some elements with animate effect
		$(".box").hover(
			function () {
			$(this).find('span.badge').addClass("animated fadeInLeft");
			$(this).find('.ico').addClass("animated fadeIn");
			},
			function () {
			$(this).find('span.badge').removeClass("animated fadeInLeft");
			$(this).find('.ico').removeClass("animated fadeIn");
			}
		);
		
	(function() {

		var $menu = $('.navigation nav'),
			optionsList = '<option value="" selected>Go to..</option>';

		$menu.find('li').each(function() {
			var $this   = $(this),
				$anchor = $this.children('a'),
				depth   = $this.parents('ul').length - 1,
				indent  = '';

			if( depth ) {
				while( depth > 0 ) {
					indent += ' - ';
					depth--;
				}

			}
			$(".nav li").parent().addClass("bold");

			optionsList += '<option value="' + $anchor.attr('href') + '">' + indent + ' ' + $anchor.text() + '</option>';
		}).end()
		.after('<select class="selectmenu">' + optionsList + '</select>');
		
		$('select.selectmenu').on('change', function() {
			window.location = $(this).val();
		});
		
	})();

		//Navi hover
		$('ul.nav li.dropdown').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
		});
		
});