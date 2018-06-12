function blogLoad() {
	var elements = [
		['#menu--title-link', '#topdiv'],
		['#shows-link', '#showdiv'],
		['#bio-link', '#biodiv'],
		['#recs-link', '#recdiv'],
		['#contact-link', '#contactdiv']
	];

	$(document).ready(function() {
		elements.map(function(elem) {
			$(elem[0]).attr("href", '/' + elem[1]);
			console.log('elem ' + elem[0] + ' mapped to ' + elem[1]);
		});
	});
}
window.blogLoad();
