function setupWindow() {
	var scroller = function (button, element) {
	  $(button).on('click', function() {
		$(element).get(0).scrollIntoView({
		  block: "start",
		  behavior: "smooth"
		});
	  });

	}
	$(document).ready(function() {

		scroller('#top', '#topdiv');
		scroller('#shows', '#showdiv');
		scroller('#bio', '#biodiv');
		scroller('#recs', '#recdiv');
		scroller('#contact', '#contactdiv');

	})
}

window.setupWindow();
