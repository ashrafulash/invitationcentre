<?php
// add theme support
function invitation_support_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote','link', 'image', 'status', 'video', 'audio', 'chat' ) );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-background');
    add_theme_support( 'custom-logo' );
    add_theme_support('custom-header');
    add_theme_support('starter-content');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'invitation_support_theme');

// load files
function invitation_enqueue_scripts(){
    
    // load css
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/asset/src/min-css/all.min.css', [], time(), 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/asset/src/flat-icon/flaticon.css', [], time(), 'all');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/asset/src/min-css/bootstrap.min.css', [], time(), 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/asset/src/min-css/master.css', [], time(), 'all');

    // load script
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/asset/src/min-js/jquery-3.4.1.slim.min.js', array (), time(), true);
    wp_enqueue_script( 'jquery-old', get_template_directory_uri() . '/asset/src/min-js/jquery-1.12.4.min.js', array (), time(), true);
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/asset/src/min-js/popper.min.js', array (), time(), true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/asset/src/min-js/bootstrap.min.js', array (), time(), true);
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/asset/src/min-js/custom.js', array (), time(), true);

}


add_action('wp_enqueue_scripts', 'invitation_enqueue_scripts');
// exerpt length control
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// views list in blog single page
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


// add navigation
register_nav_menus([
    'default-menu' => esc_html__('Default Menu', 'invitationcentre'),
]);

// add widgets area
require_once('widgets/theme_widgets.php');

/*-------------------------------------
    Initialize Elementor Widget
---------------------------------------*/ 
class ElementorCustomElement
{

	private static $instance = null;

	public static function get_instance()
	{
		if (!self::$instance)
			self::$instance = new self;
		return self::$instance;
	}

	public function init()
	{
		add_action('elementor/widgets/widgets_registered', array($this, 'widgets_registered'));
	}

	public function widgets_registered()
	{
 
      // We check if the Elementor plugin has been installed / activated.
		if (defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')) {
 
         // We look for any theme overrides for this custom Elementor element.
         // If no theme overrides are found we use the default one in this plugin.
        
        function registerWidget($dir){
            $widget_file = get_template_directory() . $dir;
			$template_file = locate_template($widget_file);
			if (!$template_file || !is_readable($template_file)) {
				$template_file = get_template_directory() . $dir;
			}
			if ($template_file && is_readable($template_file)) {
				require_once $template_file;
			}
        }

        //add create widget 
        registerWidget('/lib/create-widget.php');
        registerWidget('/lib/Result.widget.php');

			
		}
	}
}

ElementorCustomElement::get_instance()->init();