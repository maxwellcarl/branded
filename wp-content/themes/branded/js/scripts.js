(function ($, root, undefined) {

	// scroll functions
	$(window).scroll(function() { 
		if ($(this).scrollTop() > 100) { //use `this`, not `document`
			$('body').addClass('scrolled');
    } else {
    	$('body').removeClass('scrolled');
    }
  });

	// ready functioms
	$(function () {
		'use strict';


		// site loaded do stuff now
		$('body').addClass('ready');
		setTimeout(function(){
		  $('body').addClass('ready-late');
		}, 1000);
    $('.overlay').delay(200).fadeOut(800);



		setTimeout(function() {
      $('.cube.cube-home').addClass('slidein');
    }, 100);
  

		// $('#homecaro').on('slid', function() {
		//   alert("Slide Event");
		// });​

		$('.menu-pullout-btn').click(function() {
		  $('body').toggleClass('menu-pullout-active');
		});
		$('.menu-close-btn').click(function() {
		  $('body').toggleClass('menu-pullout-active');
		});
		$('.menu-pullout-overlay').click(function() {
		  $('body').toggleClass('menu-pullout-active');
		});




		$('.mail-modal-btn').click(function() {
		  $('.mail-modal').addClass('active');
		  $('.mail-modal-overlay').addClass('active');
		});
		$('.mail-modal-overlay').click(function() {
		  $('.mail-modal').removeClass('active');
		  $('.mail-modal-overlay').removeClass('active');
		});



		$('.play-pause').click(function() {
		  $(this).toggleClass('off');
		  if ( $(this).hasClass('off') ) {
		      //alert('music off');
		      $('#ambiance')[0].pause();
		  } else {
		      //alert('music playing');
		      $('#ambiance')[0].play();
		  }
		});


		// weird type.js error
		(function($){ // jQuery code here 
			$("#type").typed({
			  strings: ["Web design", "Graphic Design", "Video Production", "SEO"],
        typeSpeed: 100,
        stringstops: [41, 41, 41],
        cursorChar: "_",
        backDelay: 1000,
        showCursor: true,
        loop: true,
        contentType: 'html', // or text
        // defaults to false for infinite loop
        loopCount: false,
			});
		})(jQuery);

		// add visible to waypoints in frame
		var viewport = $(window),
      setVisible = function (e) {
          var viewportTop = viewport.scrollTop() - 60,
              viewportBottom = viewport.scrollTop() + viewport.height() - 60 ;
          $('.waypoint').each(function () {
              var self = $(this),
                  top = self.offset().top,
                  bottom = top + self.height(),
                  topOnScreen = top >= viewportTop && top <= viewportBottom,
                  bottomOnScreen = bottom >= viewportTop && bottom <= viewportBottom,
                  elemVisible = topOnScreen || bottomOnScreen;
              self.toggleClass('visible', elemVisible);
          });
      };
    viewport.scroll(setVisible);
    setVisible();

		
		// scroll to
		$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});

	});	
})(jQuery, this);

