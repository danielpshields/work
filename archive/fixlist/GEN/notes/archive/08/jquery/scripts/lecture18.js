$(document).ready(function() {
// ---------------------------
// simple accordion menu or FAQ list, with rotating image


// hide all answers
$('dd').hide();

var action = "click";
var speed = 90;

$('dt').on(action,function() {
	// get next element in DOM
	$(this).next()
		.slideToggle(speed)
		.siblings('dd')
		.slideUp(); // close all siblings

});


// ------------------------ end
});
