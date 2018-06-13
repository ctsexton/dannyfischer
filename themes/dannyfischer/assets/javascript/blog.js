$(function () {
	var elements = [
		['#menu--title-link', '#topdiv'],
		['#shows-link', '#showdiv'],
		['#bio-link', '#biodiv'],
		['#recs-link', '#recdiv'],
		['#contact-link', '#contactdiv']
	];

	// when element buttonId is clicked, class toAdd is added to elementId
	var addClass = function (buttonId, elementId, toAdd) {
		 $(buttonId).on('click', function() {
			 $(elementId).addClass(toAdd);
		 });
	 }

	elements.map(function(elem) {
		$(elem[0]).attr("href", '/' + elem[1]);
		console.log('elem ' + elem[0] + ' mapped to ' + elem[1]);
	});
	addClass('#hamburger', '#menu--list', 'menu--mobile__open');
});
