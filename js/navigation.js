/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens
 * navigation support for dropdown menus.
 */

/*--------------------------------
Navigation Animation Effect
--------------------------------*/

jQuery(document).ready(function(){
	jQuery('#site-navigation > div > ul > li > ul').addClass('animated fadeIn');
	jQuery('#site-navigation > div > ul > li > ul').css('animation-duration', '.5s');
	jQuery('#site-navigation > div > ul > li > ul > li > ul').addClass('animated fadeIn');
	jQuery('#site-navigation > div > ul > li > ul > li > ul').css('animation-duration', '.5s');
});

jQuery(document).ready(function(){
	jQuery('#mobile-menu-button').click(function(){
		jQuery('#site-navigation-mobile > div').slideToggle('slow');
	});
});

jQuery(document).ready(function(){
	if(jQuery('#site-navigation-mobile > div > ul > li').hasClass('menu-item-has-children')){
		jQuery('#site-navigation-mobile > div > ul > .menu-item-has-children').click(function(){
			jQuery(this).children('ul').slideToggle('slow');
			return false;
		});
	}
});

jQuery(document).ready(function(){
	if(jQuery('#site-navigation-mobile > div > ul > li > ul > li').hasClass('menu-item-has-children')){
		jQuery('#site-navigation-mobile > div > ul > li > ul > .menu-item-has-children').click(function(){
			jQuery(this).children('ul').slideToggle('slow');
			return false;
		});
	}
});

/*--------------------------------
Navigation Dropdown Arrows
--------------------------------*/

if(jQuery('#site-navigation > div > ul > li').hasClass('menu-item-has-children')){
	jQuery('#site-navigation > div > ul > .menu-item-has-children > a').append('<i class=\"fa fa-angle-down\" style=\"margin-left: 1em\"></i>');
}

if(jQuery('#site-navigation > div > ul > li > ul > li').hasClass('menu-item-has-children')){
	jQuery('#site-navigation > div > ul > li > ul > .menu-item-has-children > a').append('<i class=\"fa fa-angle-right\" style=\"margin-left: 1em\"></i>');
}

if(jQuery('#site-navigation-mobile > div > ul > li').hasClass('menu-item-has-children')){
	jQuery('#site-navigation-mobile > div > ul > .menu-item-has-children > a').append('<i class=\"fa fa-angle-down\" style=\"margin-left: 1em\"></i>');
}

if(jQuery('#site-navigation-mobile > div > ul > li > ul > li').hasClass('menu-item-has-children')){
	jQuery('#site-navigation-mobile > div > ul > li > ul > .menu-item-has-children > a').append('<i class=\"fa fa-angle-down\" style=\"margin-left: 1em\"></i>');
}
