
// run the isotope plugin

function isotope() {

	var $container = $('.container');

	$container.isotope({
	  // options
	  itemSelector : '.item',
	  layoutMode : 'masonry'
	});

	// filter items when filter link is clicked
	$('#filters a').click(function(){
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  return false;
	});

};

isotope();