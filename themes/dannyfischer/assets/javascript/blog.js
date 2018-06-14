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
		//console.log('elem ' + elem[0] + ' mapped to ' + elem[1]);
	});
	addClass('#hamburger', '#menu--list', 'menu--mobile__open');

	var menuState = 0; // 0 for closed, 1 open
	
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

	$('#latest-posts--button').on('click', function() {
		if (menuState == 0) {
			$('#latest-posts--list').removeClass('blog--post-list__closed');
			$('#latest-posts--list').addClass('blog--post-list__open');
			$('#latest-posts--arrow').html('&#x25BE');
			menuState = 1;
		} else {
			$('#latest-posts--list').addClass('blog--post-list__closed');
			$('#latest-posts--list').removeClass('blog--post-list__open');
			$('#latest-posts--arrow').html('&#x25C2');
			menuState = 0;
		}
	});
});
