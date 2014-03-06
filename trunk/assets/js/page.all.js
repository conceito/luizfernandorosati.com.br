(function($, window, document, undefined){

    $(document).ready(function(){

    	$('.header-menu').ReSmenu({
		    menuClass:    'responsive_menu',   // Responsive menu class
		    selectId:     'resmenu',          // select ID
		    textBefore:   false,               // Text to add before the mobile menu
		    selectOption: 'Menu:',               // First select option
		    activeClass:  'active', // Active menu li class
		    maxWidth:     480                  // Size to which the menu is responsive
		});

    });

})(jQuery, window, document);


