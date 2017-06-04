<?php

include_once "woo_tabs.php";

if ( ! function_exists( 'classicrgb_lite_setup' ) ) :
function classicrgb_lite_setup() {
	load_theme_textdomain( 'classicrgb-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',	) );
	register_nav_menu('header-menu', __( 'Header Menu', 'classicrgb-lite' ));
}
endif;
add_action( 'after_setup_theme', 'classicrgb_lite_setup' );

function classicrgb_lite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'classicrgb_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'classicrgb_lite_content_width', 0 );
function classicrgb_lite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Left', 'classicrgb-lite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'classicrgb-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'classicrgb-lite' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'classicrgb-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-1', 'classicrgb-lite' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here.', 'classicrgb-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-2', 'classicrgb-lite' ),
		'id'            => 'sidebar-6',
		'description'   => esc_html__( 'Add widgets here.', 'classicrgb-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-3', 'classicrgb-lite' ),
		'id'            => 'sidebar-7',
		'description'   => esc_html__( 'Add widgets here.', 'classicrgb-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-4', 'classicrgb-lite' ),
		'id'            => 'sidebar-8',
		'description'   => esc_html__( 'Add widgets here.', 'classicrgb-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'classicrgb_lite_widgets_init' );

function classicrgb_lite_scripts() {		
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array( ), false, 'all' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-theme.css', array( ), false, 'all' );
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( ), false, 'all' );
		wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array( ), false, 'all' );
		wp_enqueue_style( 'classicrgb-lite-style', get_stylesheet_uri() );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'classicrgb_lite_scripts' );


require get_template_directory() . '/inc/template-tags.php';
add_action( 'after_setup_theme', 'classicrgb_lite_woocommerce_support' );
function classicrgb_lite_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter('add_to_cart_fragments', 'classicrgb_lite_fragment');
function classicrgb_lite_fragment( $fragments ) {
    global $woocommerce;
    ob_start(); ?>
    <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'classicrgb-lite'); ?>"> <?php echo $woocommerce->cart->get_cart_total(); ?></a>
    <?php
    $fragments['a.cart-contents'] = ob_get_clean();
    return $fragments;
}

function skyverge_shop_display_skus() {
	global $product;
	if ( $product->has_weight() ) {
	echo '<div class="product-meta"><span class="product-meta-label">Вес:</span> ' . $product->get_weight() . ' ' . esc_attr( get_option( 'woocommerce_weight_unit' ) ) . '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop_item', 'skyverge_shop_display_skus', 9 );

add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {
 	unset($tabs['reviews']);	 
	return $tabs;
}


remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );


// define the woocommerce_before_shop_loop_item callback 
function action_woocommerce_before_shop_loop_item() { 
	global $product;
$term_list = wp_get_post_terms($product->id,'product_cat',array('fields'=>'ids'));
	$terms = $arrayName = array();

	foreach ($term_list as $key => $value) {
		array_push($terms, "<span>".get_cat_name($value)."</span>");
	}

	echo implode(", ", $terms);
};         
// add the action 
add_action('woocommerce_before_shop_loop_item', 'action_woocommerce_before_shop_loop_item', 10, 0);


add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  return 12;
}