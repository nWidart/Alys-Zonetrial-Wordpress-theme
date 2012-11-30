<?php
/**
 * zonetrial functions and definitions
 *
 * @package zonetrial
 * @since zonetrial 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since zonetrial 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'zonetrial_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since zonetrial 1.0
 */
function zonetrial_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Include facebook SDK
	 */
	// require( get_template_directory() . '/inc/api/facebook.php' );



	/**
	 * Custom Theme Options
	 */
	// require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on zonetrial, use a find and replace
	 * to change 'zonetrial' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'zonetrial', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );


	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'zonetrial' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // zonetrial_setup
add_action( 'after_setup_theme', 'zonetrial_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since zonetrial 1.0
 */
function zonetrial_widgets_init() {
	// register_sidebar( array(
	// 	'name' => __( 'Sidebar', 'zonetrial' ),
	// 	'id' => 'sidebar-1',
	// 	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	// 	'after_widget' => '</aside>',
	// 	'before_title' => '<h1 class="widget-title">',
	// 	'after_title' => '</h1>',
	// ) );

	register_sidebar(array(
		'name' => __( 'Sidebar info', 'zonetrial' ),
		'id' => 'sidebar-2',
		'description' => 'Texte sidebar de droite.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => __( 'Footer 1', 'zonetrial' ),
		'id' => 'sidebar-footer-1',
		'description' => 'Premier bloc de contenu footer.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => __( 'Footer 2', 'zonetrial' ),
		'id' => 'sidebar-footer-2',
		'description' => 'Premier bloc de contenu footer.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => __( 'Footer 3', 'zonetrial' ),
		'id' => 'sidebar-footer-3',
		'description' => 'Premier bloc de contenu footer.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => __( 'Footer 4', 'zonetrial' ),
		'id' => 'sidebar-footer-4',
		'description' => 'Premier bloc de contenu footer.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));

}
add_action( 'widgets_init', 'zonetrial_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function zonetrial_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Getting latest version of jQuery
	wp_deregister_script('jquery');
	wp_register_script('jquery', "http://code.jquery.com/jquery-latest.min.js", false, null);
	wp_enqueue_script('jquery');

	// Bring in extra styles
	//
	// 990 grid system (960 modified)
	wp_enqueue_style( '990gs', get_template_directory_uri() . '/css/990.css' );

	// Main Styling
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/tango/skin.css' );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.css' );

	// Theme related scripts
	wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array( 'jquery' ), true );
	wp_enqueue_script( 'als', get_template_directory_uri() . '/js/jquery.alsEN-1.0.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo-1.4.3.1-min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'localScroll', get_template_directory_uri() . '/js/jquery.localscroll-1.2.7-min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ), true );
	//wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.js', array( 'jquery' ), true );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'zonetrial_scripts' );

function zonetrial_adminStyles() {
	echo '<link rel="stylesheet" type="text/css" href="'. get_template_directory_uri()  .'/css/optionsframework.css">';
}
add_action('admin_head', 'zonetrial_adminStyles' );
/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */
if ( !function_exists( 'of_get_option' ) ) {
	function of_get_option($name, $default = false) {
		$optionsframework_settings = get_option('optionsframework');
		// Gets the unique option id
		$option_name = $optionsframework_settings['id'];
		if ( get_option($option_name) ) {
			$options = get_option($option_name);
		}
		if ( isset($options[$name]) ) {
			return $options[$name];
		} else {
			return $default;
		}
	}
}

/**
 * Adding the Open Graph in the Language Attributes
 *
 */
function add_opengraph_doctype( $output ) {
		return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
	}
add_filter('language_attributes', 'add_opengraph_doctype');


/**
 * Lets add Open Graph Meta Info
 *
 */
function insert_fb_in_head() {
	global $post;
	if ( !is_singular()) //if it is not a post or a page
		return;
	echo '<meta property="fb:admins" content="1300794006"/>';
	echo '<meta property="og:title" content="' . get_the_title() . '"/>';
	echo '<meta property="og:type" content="article"/>';
	echo '<meta property="og:url" content="' . get_permalink() . '"/>';
	echo '<meta property="og:site_name" content="Zonetrial.net"/>';
	if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
		$default_image= get_template_directory_uri() . "/img/logo.png";
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
		echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	}
}
//add_action( 'wp_head', 'insert_fb_in_head', 5 );

/**
 * Removing admin menus
 *
 */
function edit_admin_menus() {
	if ( current_user_can( 'client_cap' ) ) {
		remove_menu_page('upload.php');
	}
}
add_action( 'admin_menu', 'edit_admin_menus' );


require_once( get_template_directory() ."/inc/Tax-meta-class/Tax-meta-class.php");
if ( is_admin() ) {
	/*
	* configure taxonomy custom fields
	*/
	$config = array(
		'id' => 'brand_info',                         // meta box id, unique per meta box
		'title' => 'Brand Information',                      // meta box title
		'pages' => array('brands'),                    // taxonomy name, accept categories, post_tag and custom taxonomies
		'context' => 'normal',                           // where the meta box appear: normal (default), advanced, side; optional
		'fields' => array(),                             // list of meta fields (can be added by field arrays)
		'local_images' => false,                         // Use local or hosted images (meta box images for add/remove)
		'use_with_theme' => false                        //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
	);
	/*
	* Initiate your taxonomy custom fields
	*/
	$my_meta = new Tax_Meta_Class($config);
	$my_meta->addText( $prefix.'brand_url_link', array( 'name'=> __( 'Brand Homepage URL', 'tax-meta' ) ) );
	$my_meta->Finish();
}


function register_custom_menu_page() {
   add_menu_page('Docs', 'Docs', 'add_users', 'documentation/index.php', '',   admin_url('documentation/assets/images/icon.png'), 1);
}
add_action('admin_menu', 'register_custom_menu_page');
