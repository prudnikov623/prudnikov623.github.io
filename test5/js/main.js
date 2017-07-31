$(document).ready(function() {
	$('a.call').click(function(e) {
		e.preventDefault();
		$('.overlay,.popup--order').fadeIn('fast');
	});
	$('.overlay,.close_order').click(function(e) {
		e.preventDefault();
		$('.overlay,.popup').fadeOut('fast');
	});
});