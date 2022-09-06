(function ($) {

	"use strict";

	$(".scroll-top").hide();
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 300) {
			$(".scroll-top").fadeIn();
		} else {
			$(".scroll-top").fadeOut();
		}
	});
	$(".scroll-top").on("click", function () {
		$("html, body").animate({
			scrollTop: 0,
		}, 700)
	});

	$(document).ready(function() {
		$('.select2').select2({
			theme: "bootstrap"
		});		
	});
		
	new WOW().init();

	$('.video-button').magnificPopup({
	  	type: 'iframe',
		gallery:{
			enabled:true
		}
	});

	$('.magnific').magnificPopup({
	  	type: 'image',
		gallery:{
			enabled:true
		}
	});

	$('.my-news-ticker').AcmeTicker({
		type:'typewriter',
		direction: 'right',
		speed:50,
		controls: {
			prev: $('.acme-news-ticker-prev'),
			toggle: $('.acme-news-ticker-pause'),
			next: $('.acme-news-ticker-next')
		}
	});

	$('.related-post-carousel').owlCarousel({
        loop: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplaySpeed: 1500,
        smartSpeed: 1500,
        margin: 30,
        mouseDrag: true,
        nav: true,
        dots: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 2
            }
        }
    });

    $('.video-carousel').owlCarousel({
        loop: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplaySpeed: 1500,
        smartSpeed: 1500,
        margin: 30,
        mouseDrag: true,
        nav: true,
        dots: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    });

})(jQuery);