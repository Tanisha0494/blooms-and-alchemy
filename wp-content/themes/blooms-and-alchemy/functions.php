<?php 
//turn on sleeping features
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('gallery','video','image','quote'));

add_image_size( 'feature', 300, 300, true ); //name,height,width,crop

/**
 * Turn on Menu Support
 *	@since 0.1
 */

add_action('init', '_menus');

function _menus(){
	register_nav_menus(array(
		'main_nav' 		=> 'Main Navigational Area',
		'footer_nav' 	=> 'Footer Navigational Area',
		'header_nav' 	=> 'Header Navigational Area'
		));
}

//Remove inline height and width attribute on images

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

add_action('widgets_init', '_widgets');

/**
 * Make default excerpts better
 *@since 0.1
 */
function awesome_ex_length(){
	return 85; //words 
	//default is 55 words
}

add_filter('excerpt_length', 'awesome_ex_length');

//improve [...]

function awesome_readmore(){
	return '<a href="'.get_permalink().'" class="readmore button">Read More</a>';
}

add_filter('excerpt_more','awesome_readmore');

function page_bodyclass() {  // add class to <body> tag based on slug and other specifications
	global $wp_query;
	$page = '';
	if (is_front_page() ) {
    	   $page = 'home';
	} else if(is_home()){
		$page = 'blog';
	}
	else if (is_page()) {
   	   $page = $wp_query->query_vars["pagename"];
	}else if(is_archive()){
		$page = $wp_query->query_vars["post_type"];
	}else if(is_single()){
		$page = 'single-' . $wp_query->query_vars["post_type"];
	}
	if ($page){
		echo 'class= "'. $page. ' cf"';
	}
}

function _widgets(){
	register_sidebar(array(
		'name' 			=> 'Blog Sidebar',
		'id' 			=> 'blog-sidebar',
		'description' 	=> 'Sidebar for the Blog',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
		));
	register_sidebar(array(
		'name' 			=> 'Front Page Sidebar',
		'id' 			=> 'front-page-sidebar',
		'description' 	=> 'Sidebar for the Front page',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
		));
		register_sidebar(array(
		'name' 			=> 'Footer Sidebar',
		'id' 			=> 'foot-sidebar',
		'description' 	=> 'Sidebar for the Footer page',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
		));
}

function _enqueue_script() {
	wp_enqueue_script( 'jquery' );	
}

add_action( 'wp_enqueue_scripts', '_enqueue_script' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<main class="cf">';
}

function my_theme_wrapper_end() {
  echo '</main>';
}

add_action( 'wp_enqueue_scripts', 'parent_theme_enqueue_styles' );
function parent_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}