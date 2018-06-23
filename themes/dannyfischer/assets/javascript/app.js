function setupWebpage() {

	var scroller = function (button, element) {
		$(button).on("click", function(event){
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: $(element).position().top
			}, 500, 'swing');
		});
	}

	// when element buttonId is clicked, class toRemove is removed from elementId
	var removeClass = function (buttonId, elementId, toRemove) {
		$(buttonId).on('click', function() {
			$(elementId).removeClass(toRemove);
		});
	}

	// when element buttonId is clicked, class toAdd is added to elementId
	var addClass = function (buttonId, elementId, toAdd) {
		 $(buttonId).on('click', function() {
			 $(elementId).addClass(toAdd);
		 });
	 }

	var elements = [
		['#menu--title', '#topdiv'],
		['#shows', '#showdiv'],
		['#bio', '#biodiv'],
		['#recs', '#recdiv'],
		['#contact', '#contactdiv']
	];

	elements.map(function (element) {
		scroller(element[0], element[1]);
		removeClass(element[0], '#menu--list', 'menu--mobile__open');
	});

	addClass('#hamburger', '#menu--list', 'menu--mobile__open');
}
// save and remove window.location.hash to prevent scroll
var target = window.location.hash;
window.location.hash = "";

// Set up page when ready and scroll to top
$(function () {
	window.setupWebpage();
	if(target) {
		window.scrollTo(0,0);
	}
	quoteMachine(3000);
});

// when all images loaded, scroll to target if exists
$(document).imagesLoaded(function() {
	if(target) {
		var hash = document.getElementById(target.split("").slice(1).join(""));
		hash.scrollIntoView();
		window.location.hash = target;
	}
});
