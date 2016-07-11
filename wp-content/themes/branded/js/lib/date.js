function updateClock () {
	var currentTime = new Date ( );
	var currentHours = currentTime.getHours ( );
	var currentMinutes = currentTime.getMinutes ( );
	var currentSeconds = currentTime.getSeconds ( );

	var currentDay = (new Date).getDate();
	var currentMonth = (new Date).getMonth() + 1;
	var currentYear = (new Date).getFullYear();

	// Pad the minutes and seconds with leading zeros, if required
	currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
	currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

	// Choose either "AM" or "PM" as appropriate
	var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

	// Convert the hours component to 12-hour format if needed
	currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

	// Convert an hours component of "0" to "12"
	currentHours = ( currentHours == 0 ) ? 12 : currentHours;

	// Compose the string for display
	var currentTimeString = currentDay + "/" + currentMonth + "/" + currentYear + "&nbsp;&nbsp;" +  currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
	
	
 	$("#time").html(currentTimeString);
 	  	
}

(function ($, root, undefined) {
	// ready functioms
	$(function () {
		'use strict';



			// function DateToString(date){
			//     function LeadingZero(value, digits){
			//         var result = ''+value;
			//         while (result.length<digits){
			//             result = '0'+result;
			//         }
			//         return result;
			//     }
			//     return +LeadingZero(date.getMonth(),2)+'/'+LeadingZero(date.getDate(),2)+'/'+LeadingZero(date.getFullYear(),4)+' '+LeadingZero(date.getHours(),2)+':'+LeadingZero(date.getMinutes(),2)+':'+LeadingZero(date.getSeconds(),2);
			// }
			// (function(){
			//     $('#time').text(DateToString(new Date()));
			//     setTimeout(arguments.callee, 1000);
			// })();

			
		  setInterval('updateClock()', 1000);



	});	
})(jQuery, this);
