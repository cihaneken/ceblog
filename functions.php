<?php
if ( ! function_exists( 'ceblog_setup' ) ) :
function ceblog_setup() {


	load_theme_textdomain( 'ceblog' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 300, 200, true );
	register_nav_menus( array(
		'siteheadermenu' => __( 'Site Header Menü','ceblog' ),
		'sitesocialmenu' => __( 'Site Social Menu','ceblog' ),
		'sitefootermenu'  => __( 'Site Footer Menu','ceblog' ),
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ceblog' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ceblog' ),
		'before_widget' => '<div id="%1$s" class="card-body p-0 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header col-sm-12"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar Single', 'ceblog' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ceblog' ),
		'before_widget' => '<div id="%1$s" class="card-body p-0 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header col-sm-12"><h3>',
		'after_title'   => '</h3></div>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer-1', 'ceblog' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ceblog' ),
		'before_widget' => '<div id="%1$s" class="card-body p-0 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header col-sm-12"><h3>',
		'after_title'   => '</h3></div>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer-2', 'ceblog' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ceblog' ),
		'before_widget' => '<div id="%1$s" class="card-body p-0 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header col-sm-12"><h3>',
		'after_title'   => '</h3></div>',
	) );
		register_sidebar( array(
		'name'          => __( 'Footer-3', 'ceblog' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ceblog' ),
		'before_widget' => '<div id="%1$s" class="card-body p-0 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header col-sm-12"><h3>',
		'after_title'   => '</h3></div>',
	) );
			register_sidebar( array(
		'name'          => __( 'Reklamlar', 'ceblog' ),
		'id'            => 'reklamlar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ceblog' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<span>',
		'after_title'   => '</span>',
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'ceblog_setup' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
if ( !function_exists('lgr_auto_excerpt_more') ) {
    // Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis
    function lgr_auto_excerpt_more( $more ) {
        return '&#8618;';
    }
    add_filter('excerpt_more', 'lgr_auto_excerpt_more');
}


function remove_thumbnail_width_height( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5 );


// Add Shortcode Bilgik
function bilgi_kutu_shortcode( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'renk' => '',
			'genis' => '93',
			'yuksek' => '10',
			'hiza' => 'none',
		),
		$atts,
		'bilgik'
	);

	// Return custom embed code
	return ' 
<div class="alert alert-' . $atts['renk'] . '" role="alert" style="min-height:' . $atts['yuksek'] . 'px;width:' . $atts['genis'] . '%;text-align:'. $atts['hiza'] .'">'. $content .'</div>
';
}
add_shortcode( 'bilgik', 'bilgi_kutu_shortcode' );


// title ayarı
add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'textdomain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}