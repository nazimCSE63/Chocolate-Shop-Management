/**
*****************************************
* script.js
*
* JQUERY FILE FOR CUSTOM JS AND ACTIVE JS
*
*****************************************
**/



/**
***********************************************
* Table of contents
***********************************************
*
*
**/

(function ($) {
    "use strict";
	
	// Document ready function
	// ========================
    jQuery(document).ready(function ($) {
		
        
            //Counter Up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
		
            //Slider Area
			$('.slider-area').owlCarousel({
				items: 1,
				loop: true, 
				autoplay: true,
				dots: true,
				nav: true,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
			});
        
			// Homepage Slider Animation Support
			$(".slider-area").on("translate.owl.carousel", function(){
				$(".slider-content h3, .slider-content h2").removeClass("animated fadeInUp").css({'opacity':'0'});
				$(".slider-content p").removeClass("animated fadeInUp").css({'opacity':'0'});
			});
			
			$(".slider-area").on("translated.owl.carousel", function(){
				$(".slider-content h3, .slider-content h2").addClass("animated fadeInUp").css({'opacity':'0'});
				$(".slider-content p").addClass("animated fadeInUp").css({'opacity':'0'});
			});		
        
			$(".slider-area").on("translated.owl.carousel", function(){
				$(".slider-content h3, .slider-content h2").addClass("animated fadeInUp").css({'opacity':'0'});
				$(".slider-content p").addClass("animated fadeInUp").css({'opacity':'0'});
			});
        
            //Work Area Isotope Section
            $(".projects-title li").on('click', function() {
            $(".projects-title li").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr('data-filter');
            $(".projects-list").isotope({
                filter: selector
            });
            
            });
        
            //Testimonial Owl Carousel Activision
            $(".testimonial-carousel").owlCarousel({
            margin: 30,
            nav: false,
            dots: false,
            loop: true,
            items: 1,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            autoplay: true,
            smartSpeed: 450,
            responsiveClass: true,

            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 1
                }
            }
            });
        
            //Clients Owl Carousel Activision
            $(".clients-slider").owlCarousel({
            nav: false,
            dots: false,
            loop: true,
            items: 1,
            autoplay: true,
            responsiveClass: true,

            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4
                }
            }    
            });

            /* Smooth Scroll */
            $("li.smooth-menu a").bind('click', function(event) {
                var $anchor = $(this);
                var headerH = '73';
                $('html, body').stop().animate({
                    scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
                }, 1200, 'easeInOutExpo');

                event.preventDefault();
            });
        
            /* Active */
            $('body').scrollspy({
                target: '.navbar-collapse', 
                offset: 95
            });

            /* Scroll */
            $(document).on("scroll", function(){
            if
            ($(document).scrollTop() > 100){
              $(".menu-section").addClass("shrink");
            }
            else
            {
                $(".menu-section").removeClass("shrink");
            }
            });
        
            new WOW().init();
        
    });
    
            /* ======= Pre Loader ======= */
            jQuery(window).load(function(){
                $('.loaded').fadeOut(); 
                $('#loading').delay(400).fadeOut('slow'); 
                $('body').delay(400).css({
                    'overflow': 'visible'
                });
            });
}(jQuery));