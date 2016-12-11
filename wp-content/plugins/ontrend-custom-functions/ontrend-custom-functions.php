<?php 
/**
* Plugin Name: Ontrend websites Custom Functions
* Description: This plugin contains all of my awesome custom functions.
* Author: Andrew McDougal
* Version: 0.1 */ 
/* Your code goes below here. */ 


/**
 * Proper way to enqueue scripts and styles
 */
function ontrend_add_styles_and_scripts() {
	// Sample load from cloud CSS
	wp_enqueue_style( 'prefix-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3' );

	// JS
	// jQuery
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), '' );

	// Mix it up filter
	//wp_enqueue_script( 'mix-script', 'http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js', array(), '' );

	// Masonry layout
	//wp_enqueue_script( 'masonry-script', 'https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.min.js', array(), '' );

	// Isotope filter
	//wp_enqueue_script( 'isotope-script', 'https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.js', array(), '' );

	// GSAP Animation & Timelines
	wp_enqueue_script( 'gsap-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), '' );







	// Responsive classes
	//wp_enqueue_script( 'responsive-classes-script', get_template_directory_uri() . '/library/js/jquery.responsive-classes.js', array(), '' );

	// Slick slider
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/library/js/slick/slick.js', array(), '' );

	// Succinct
	//wp_enqueue_script( 'succinct-script', get_template_directory_uri() . '/library/js/jQuery.succinct.js', array(), '' );

	// AJAX Pagination
	//wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/library/js/ajax-pagination.js', array(), '' );

	// Remodal popup
	//wp_enqueue_script( 'remodal-script', get_template_directory_uri() . '/library/js/remodal.js', array(), '' );

	// Checkbox forms
	//wp_enqueue_script( 'form-script', get_template_directory_uri() . '/library/js/icheck.js', array(), '' );

	// Pushy nav
	//wp_enqueue_script( 'pushy-script', get_template_directory_uri() . '/library/js/pushy.min.js', array(), '', true );

	// Responsive classes
	//wp_enqueue_script( 'responsive-script', get_template_directory_uri() . '/library/js/jquery-responsive-classes.js', array(), '' );

	// Center
	//wp_enqueue_script( 'center-script', get_template_directory_uri() . '/library/js/center.js', array(), '' );

	// Modernizr
	//wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/library/js/modernizr.js', array(), '' );

	// Match height
	//wp_enqueue_script( 'height-script', get_template_directory_uri() . '/library/js/matchHeight.js', array(), '' );

	// Home fullscreen carousel
	//wp_enqueue_script( 'superslides-script', get_template_directory_uri() . '/library/js/jquery.superslides.js', array(), '' );

	// truncate text
	//wp_enqueue_script( 'succinct-script', get_template_directory_uri() . '/library/js/jQuery.succinct.min.js', array(), '' );



	// Fraynework custom js
	//wp_enqueue_script( 'animations-script', get_template_directory_uri() . '/library/js/animations.js', array(), '' );
	wp_enqueue_script( 'fraynework-script', get_template_directory_uri() . '/library/js/ontrend.js', array(), '' );

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	//
	// CSS
	//

	// Slick slider css
	wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/library/js/slick/slick.css', array(), '' );
	wp_enqueue_style( 'slick-theme-style', get_stylesheet_directory_uri() . '/library/js/slick/slick-theme.css', array(), '' );

	// Remodal popup css
	//wp_enqueue_style( 'remodal-style', get_stylesheet_directory_uri() . '/library/css/remodal.css', array(), '' );

	// Skeleton grid
	//wp_enqueue_style( 'skeleton-style', get_stylesheet_directory_uri() . '/library/css/skeleton.css', array(), '' );

	// Ontrend custom css
	wp_enqueue_style( 'ontrend-style', get_stylesheet_directory_uri() . '/library/css/ontrend.css', array(), '' );



	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}

add_action( 'wp_enqueue_scripts', 'ontrend_add_styles_and_scripts' );









if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page();
  
}





/* Your code goes above here. */ ?>