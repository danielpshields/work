$(document).ready(function() {
// ---------------------------
// simple accordion menu or FAQ list, with rotating image


// hide all answers
$('#learnMore_campus').hide();
var action = "click";
var speed = 0;
$('#arrow_campus').on(action,function() {
	// get next element in DOM
	$(this).next()
		.slideToggle(speed)
		.siblings('#learnMore_campus')
		.slideUp(); // close all siblings
		// get image for the active question
		var current = $(this).children('#image_campus');
		// remove rotate class from any other img
		 $('#image_campus').not(current).removeClass('rotate');
		// toggle rotate class on the current img
		$(current).toggleClass('rotate');
});

$('#learnMore_online').hide();
var action = "click";
var speed = 0;
$('#arrow_online').on(action,function() {
	// get next element in DOM
	$(this).next()
		.slideToggle(speed)
		.siblings('#learnMore_online')
		.slideUp(); // close all siblings
		// get image for the active question
		var current = $(this).children('#image_online');
		// remove rotate class from any other img
		 $('#image_online').not(current).removeClass('rotate');
		// toggle rotate class on the current img
		$(current).toggleClass('rotate');
});



// ------------------------ end
});
