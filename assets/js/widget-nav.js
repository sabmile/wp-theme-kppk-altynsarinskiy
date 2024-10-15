jQuery(document).ready(function ($) {

	var $body = $('body');

	// ____ TOGGLE sidenav __________________
	$body.on('click', '.sidenav-mobile-toogle', function () {
			 var $box = $(this).closest('.widget-sidenav');
			 $box.toggleClass('now-opened');
	});

	// ____ TOGGLE children _________________
	$body.on('click', '.open-children', function () {
			 var $box = $(this).siblings('.sidenav-children');
			 $box.toggleClass('sidenav-closed');
			 $(this).toggleClass('now-closed');
	});

});