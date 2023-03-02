<?php


// Hide admin bar 
show_admin_bar( false );


/**
 * Dequeue the default script.
 *
 * Hooked to the wp_print_scripts action, with a late priority (100),
 * so that it is after the script was enqueued.
 */
function aaraf_dequeue_script() {
    wp_deregister_style( 'classic-theme-styles-css' );
    wp_deregister_style( 'wp-block-library-css' );
    wp_deregister_style( 'global-styles-inline-css' );
}
add_action( 'wp_print_scripts', 'aaraf_dequeue_script' );


// Register custome style and scripts

function addThemeStyles(){
    wp_enqueue_style( 'arrafStyle', get_stylesheet_uri() );
    wp_register_style('bootstrap',get_template_directory_uri(  ) . '/assets/css/bootstrap.min.css', [], filemtime( get_template_directory(  ) . '/assets/css/bootstrap.min.css' ) );
    wp_register_style('font-awesome',get_template_directory_uri(  ) . '/assets/css/font-awesome.min.css', [], filemtime( get_template_directory(  ) . '/assets/css/font-awesome.min.css' ) );
    wp_register_style('animate', get_template_directory_uri(  ) . '/assets/css/animate.min.css', [], filemtime( get_template_directory(  ) . '/assets/css/animate.min.css' ) );
    wp_register_style('owl.carousel',get_template_directory_uri(  ) . '/assets/css/owl.carousel.css', [], filemtime( get_template_directory(  ) . '/assets/css/owl.carousel.css' ) );
    wp_register_style('owl.transitions', get_template_directory_uri(  ) . '/assets/css/owl.transitions.css', [], filemtime(get_template_directory(  ) . '/assets/css/owl.transitions.css' ) );
    wp_register_style('prettyPhoto', get_template_directory_uri(  ) . '/assets/css/prettyPhoto.css', [], filemtime( get_template_directory(  ) . '/assets/css/prettyPhoto.css' ) );
    wp_register_style('main', get_template_directory_uri(  ) . '/assets/css/main.css', [], filemtime( get_template_directory(  ) . '/assets/css/main.css' ) );
    wp_register_style('responsive', get_template_directory_uri(  ) . '/assets/css/responsive.css', [], filemtime( get_template_directory(  ) . '/assets/css/responsive.css' ) );

    wp_register_script('html', get_template_directory_uri() . '/assets/js/html5shiv.js', [], filemtime( get_stylesheet_directory() . '/assets/js/main.js' )  );
    wp_register_script('respond', get_template_directory_uri() . '/assets/js/respond.min.js', [], filemtime( get_stylesheet_directory() . '/assets/js/main.js' ) );

        
    wp_register_script('jquery-1.10.2', get_template_directory_uri() . '/assets/js/jquery.js', [], filemtime( get_stylesheet_directory() . '/assets/js/jquery.js' ), true );
    wp_register_script('bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], filemtime( get_stylesheet_directory() . '/assets/js/bootstrap.min.js' ), true );
    wp_register_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', ['bootstrapJS'], filemtime( get_stylesheet_directory().'/assets/js/owl.carousel.min.js'),true);
    wp_register_script('scroll', get_template_directory_uri() . '/assets/js/mousescroll.js', ['bootstrapJS'], filemtime( get_stylesheet_directory().'/assets/js/mousescroll.js' ),true);
    wp_register_script('smoothscroll', get_template_directory_uri() . '/assets/js/smoothscroll.js', ['bootstrapJS'], filemtime( get_stylesheet_directory().'/assets/js/smoothscroll.js' ), true);
    wp_register_script('prettyPhoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', ['bootstrapJS'], filemtime( get_stylesheet_directory() .'/assets/js/jquery.prettyPhoto.js' ),true);
    wp_register_script('isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', ['bootstrapJS'], filemtime( get_stylesheet_directory() . '/assets/js/jquery.isotope.min.js' ),true);
    wp_register_script('inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', ['bootstrapJS'], filemtime( get_stylesheet_directory() . '/assets/js/jquery.inview.min.js' ),true);
    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', ['bootstrapJS'], filemtime( get_stylesheet_directory() . '/assets/js/wow.min.js' ), true);
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', ['bootstrapJS'], filemtime( get_stylesheet_directory() . '/assets/js/main.js' ), true);

    wp_enqueue_style( 'arrafStyle', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'animate' );
    wp_enqueue_style( 'owl.carousel' );
    wp_enqueue_style( 'owl.transitions' );
    wp_enqueue_style( 'prettyPhoto' );
    wp_enqueue_style( 'main' );
    wp_enqueue_style( 'responsive' );

    wp_enqueue_script( 'html' );
    wp_enqueue_script( 'respond' );

    wp_enqueue_script( 'jquery-1.10.2' );
    wp_enqueue_script( 'bootstrapJS' );
    wp_enqueue_script( 'owl' );
    wp_enqueue_script( 'scroll' );
    wp_enqueue_script( 'smoothscroll' );
    wp_enqueue_script( 'prettyPhoto' );
    wp_enqueue_script( 'isotope' );
    wp_enqueue_script( 'inview' );
    wp_enqueue_script( 'wow' );
    wp_enqueue_script( 'main' );
} 

add_action( 'wp_enqueue_scripts', 'addThemeStyles'  );

add_theme_support( "menues" );

register_nav_menus( 
    array(
    'top-menu' => __('Top Menu','arrafTheme'),
    'footer-menu' => __('Footer Menu','arrafTheme'),
    )
);


function arraf_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 100,
		'flex-height'          => false,
		'flex-width'           => false,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'arraf_custom_logo_setup' );



function aaraf_image_size_setup() {
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'thumbnail', 220, 220 ); 
    add_image_size( 'small', 800, 800, true ); 
    add_image_size( 'width', 1320, 1320,['center','center'] ); 
 }
 
 add_action( 'after_setup_theme', 'aaraf_image_size_setup' );

function aaraf_custom_sizes( $sizes ) {
    return array_merge( $sizes,[
        'thumbnail' => __( 'Very small 220 X 220 PXLs','aarafTheme' ),
        'small' => __( 'Small 800 X 800 PXLs','aarafTheme' ),
        'width' => __( 'Large 1320 X 1320 PXLs','aarafTheme' ),
    ] 
    );
}
add_filter( 'image_size_names_choose', 'aaraf_custom_sizes' );


function aaraf_custom_dynamic_slider() {
    register_post_type( 'dynamic_slider',
      [
        'labels' => [
          'name' => __( 'Slider', 'aaraf' ),
          'singular_name' => __( 'Slide', 'aaraf' )
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
      ]
    );
  }
  add_action( 'init', 'aaraf_custom_dynamic_slider' );
