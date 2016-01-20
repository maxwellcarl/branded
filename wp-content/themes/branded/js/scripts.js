(function ($, root, undefined) {
	$(function () {
		'use strict';


		// site loaded do stuff now
		$('body').delay(200).addClass('ready');
    $('.overlay').delay(200).fadeOut(800);



		setTimeout(function() {
      $('.cube').css({
          'top': '50px'
      });
    }, 1000);

		
		$(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 100) {
          $("body").addClass("scrolled");
      } else {
          $("body").removeClass("scrolled");
      }
    });
    


		// $('#homecaro').on('slid', function() {
		//   alert("Slide Event");
		// });​

		$('.nav-open').click(function() {
		  $('.mobile-menu').addClass('active');
		});
		$('.nav-close').click(function() {
		  $('.mobile-menu').removeClass('active');
		});


		$('.mail-modal-btn').click(function() {
		  $('.mail-modal').addClass('active');
		  $('.mail-modal-overlay').addClass('active');
		});
		$('.mail-modal-overlay').click(function() {
		  $('.mail-modal').removeClass('active');
		  $('.mail-modal-overlay').removeClass('active');
		});


	});	
})(jQuery, this);
