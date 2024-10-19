
$(document).ready(function () {
	let elem = document.querySelector('.articles');
	
	let infScroll = new InfiniteScroll( elem, {
		// options
		path: '.f3-widget-paginator .next a',
		// Infinite Scroll options...
		append: '.article',
		hideNav: '.f3-widget-paginator',
		status: '.page-load-status'
	});
});
