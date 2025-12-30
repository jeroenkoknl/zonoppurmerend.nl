<?php
/**
 * @package 	WordPress
 * @subpackage 	Eco Press
 * @version		1.2.1
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('eco_press_system_fonts_list')) {
	function eco_press_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('eco_press_get_google_fonts_list')) {
	function eco_press_get_google_fonts_list() {
		$fonts = array( 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic|Titillium Web', 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
			'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
			'Droid+Sans:400,700|Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
			'PT+Sans:400,400italic,700,700italic|PT Sans', 
			'PT+Sans+Caption:400,700|PT Sans Caption', 
			'PT+Sans+Narrow:400,700|PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic|PT Serif', 
			'Ubuntu:400,400italic,700,700italic|Ubuntu', 
			'Ubuntu+Condensed|Ubuntu Condensed', 
			'Headland+One|Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
			'Lato:300,300italic,700,700italic|Lato', 
			'Cuprum:400,400italic,700,700italic|Cuprum', 
			'Oswald:300,400,700|Oswald', 
			'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
			'Lobster|Lobster', 
			'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
			'Questrial|Questrial', 
			'Raleway:300,400,500,600,700|Raleway', 
			'Dosis:300,400,500,700|Dosis', 
			'Cutive+Mono|Cutive Mono', 
			'Quicksand:300,400,700|Quicksand', 
			'Montserrat:400,700|Montserrat', 
			'Cookie|Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('eco_press_text_transform_list')) {
	function eco_press_text_transform_list() {
		$list = array( 
			'none' => esc_html__('none', 'eco-press'), 
			'uppercase' => esc_html__('uppercase', 'eco-press'), 
			'lowercase' => esc_html__('lowercase', 'eco-press'), 
			'capitalize' => esc_html__('capitalize', 'eco-press'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('eco_press_text_decoration_list')) {
	function eco_press_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'eco-press'), 
			'underline' => esc_html__('underline', 'eco-press'), 
			'overline' => esc_html__('overline', 'eco-press'), 
			'line-through' => esc_html__('line-through', 'eco-press'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('eco_press_custom_color_schemes_list')) {
	function eco_press_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'eco-press'), 
			'second' => esc_html__('Custom 2', 'eco-press'), 
			'third' => esc_html__('Custom 3', 'eco-press') 
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Require Files Function
if (!function_exists('eco_press_locate_template')) {
	function eco_press_locate_template($template_names, $require_once = true, $load = true) {
		$located = '';
		
		
		foreach ((array) $template_names as $template_name) {
			if (!$template_name) {
				continue;
			}
			
			
			if (file_exists(get_stylesheet_directory() . '/' . $template_name)) {
				$located = get_stylesheet_directory() . '/' . $template_name;
				
				
				break;
			} elseif (file_exists(get_template_directory() . '/' . $template_name)) {
				$located = get_template_directory() . '/' . $template_name;
				
				
				break;
			}
		}
		
		
		if ($load && $located != '') {
			if ($require_once) {
				require_once($located);
			} else {
				require($located);
			}
		}
		
		
		return $located;
	}
}



// Theme Plugin Support Constants
if (class_exists('Cmsmasters_Content_Composer')) {
	define('CMSMASTERS_CONTENT_COMPOSER', true);
} else {
	define('CMSMASTERS_CONTENT_COMPOSER', false);
}

if (class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} else {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} else {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} else {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (class_exists('Cmsmasters_Donations')) {
	define('CMSMASTERS_DONATIONS', true);
} else {
	define('CMSMASTERS_DONATIONS', false);
}

if (function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', false);
} else {
	define('CMSMASTERS_TIMETABLE', false);
}

if (class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', true);
} else {
	define('CMSMASTERS_TC_EVENTS', false);
}


// CMSMasters Importer Compatibility
define('CMSMASTERS_IMPORTER', true);

// CMSMasters Custom Fonts Compatibility
define('CMSMASTERS_CUSTOM_FONTS', true);

// Theme Colored Categories Constant
define('CMSMASTERS_COLORED_CATEGORIES', true);

// Theme Projects Compatible
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatible
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Developer Mode Constant
define('CMSMASTERS_DEVELOPER_MODE', false);
 
// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}



// Theme Image Thumbnails Size
if (!function_exists('eco_press_get_image_thumbnail_list')) {
	function eco_press_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		60, 
				'height' => 	60, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'eco-press') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	360, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'eco-press') 
			), 
			'cmsmasters-project-thumb' => array( 
				'width' => 		580, 
				'height' => 	490, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'eco-press') 
			), 
			'cmsmasters-project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'eco-press') 
			), 
			'post-thumbnail' => array( 
				'width' => 		860, 
				'height' => 	516, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'eco-press') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'eco-press') 
			), 
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	610, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'eco-press') 
			), 
			'cmsmasters-project-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	610, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'eco-press') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'eco-press') 
			),
			'cmsmasters-full-wide-thumb' => array( 
				'width' => 		1440, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Full Wide', 'eco-press') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$list['cmsmasters-event-thumb'] = array( 
				'width' => 		580, 
				'height' => 	378, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'eco-press') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('eco_press_all_color_schemes_list')) {
	function eco_press_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'eco-press'), 
			'header' => 		esc_html__('Header', 'eco-press'), 
			'navigation' => 	esc_html__('Navigation', 'eco-press'), 
			'header_top' => 	esc_html__('Header Top', 'eco-press'), 
			'footer' => 		esc_html__('Footer', 'eco-press') 
		);
		
		
		$out = array_merge($list, eco_press_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('eco_press_color_schemes_defaults')) {
	function eco_press_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#717171', 
				'link' => 		'#53d572', 
				'hover' => 		'#46c965', 
				'heading' => 	'#343434', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f8f8f8', 
				'border' => 	'#dfdfdf' 
			), 
			'header' => array( // Header color scheme
				'mid_color' => 		'#717171', 
				'mid_link' => 		'#343434', 
				'mid_hover' => 		'#46c965', 
				'mid_bg' => 		'#ffffff', 
				'mid_bg_scroll' => 	'#ffffff', 
				'mid_border' => 	'#e8e8e8', 
				'bot_color' => 		'#ffffff', 
				'bot_link' => 		'#ffffff', 
				'bot_hover' => 		'#53d572', 
				'bot_bg' => 		'#46c965', 
				'bot_bg_scroll' => 	'#46c965', 
				'bot_border' => 	'#ffffff', 
				'overlaps_bg' =>	'rgba(255,255,255,0)'
			), 
			'navigation' => array( // Navigation color scheme
				'title_link' => 			'#343434', 
				'title_link_hover' => 		'#46c965', 
				'title_link_current' => 	'#46c965', 
				'title_link_subtitle' => 	'#adadad', 
				'title_link_bg' => 			'#ffffff', 
				'title_link_bg_hover' => 	'#ffffff', 
				'title_link_bg_current' => 	'#ffffff', 
				'title_link_border' => 		'#ffffff', 
				'dropdown_text' => 			'rgba(255,255,255,0.6)', 
				'dropdown_bg' => 			'#303030', 
				'dropdown_border' => 		'#303030', 
				'dropdown_link' => 			'#ffffff', 
				'dropdown_link_hover' => 	'#53d572', 
				'dropdown_link_subtitle' => 'rgba(255,255,255,0.5)', 
				'dropdown_link_highlight' => '#53d572', 
				'dropdown_link_border' => 	'rgba(255,255,255,0.1)', 
				'overlaps_color' =>			'#ffffff', 
				'overlaps_hover' =>			'rgba(255,255,255,.7)',
				'overlaps_bd' =>			'rgba(255,255,255,0)'
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 					'#ffffff', 
				'link' => 					'#ffffff', 
				'hover' => 					'#ffffff', 
				'bg' => 					'#46c965', 
				'border' => 				'#46c965', 
				'title_link' => 			'#ffffff', 
				'title_link_hover' => 		'#ffffff', 
				'title_link_bg' => 			'#46c965', 
				'title_link_bg_hover' => 	'#53d572', 
				'title_link_border' => 		'#46c965', 
				'dropdown_bg' => 			'#303030', 
				'dropdown_border' => 		'#303030', 
				'dropdown_link' => 			'#ffffff', 
				'dropdown_link_hover' => 	'#53d572', 
				'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
				'dropdown_link_border' => 	'rgba(255,255,255,0.1)'
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'rgba(255,255,255,0.6)', 
				'link' => 		'#53d572',  
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#303030', 
				'alternate' => 	'#303030', 
				'border' => 	'rgba(255,255,255,0.2)', 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#717171', 
				'link' => 		'#53d572', 
				'hover' => 		'#46c965', 
				'heading' => 	'#343434', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f8f8f8', 
				'border' => 	'#dfdfdf' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#717171', 
				'link' => 		'#53d572', 
				'hover' => 		'#46c965', 
				'heading' => 	'#343434', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f8f8f8', 
				'border' => 	'#dfdfdf' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#717171', 
				'link' => 		'#53d572', 
				'hover' => 		'#46c965', 
				'heading' => 	'#343434', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#f8f8f8', 
				'border' => 	'#dfdfdf' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', 'framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_COMPOSER', 'cmsmasters-c-c');
define('CMSMASTERS_DEMO_FILES_PATH', get_template_directory() . '/framework/admin/inc/demo-content/');



// Load Framework Parts
eco_press_locate_template(CMSMASTERS_CLASS . '/Browser.php', true);

if (class_exists('Cmsmasters_Theme_Importer')) {
	require_once(CMSMASTERS_ADMIN_INC . '/demo-content-importer.php');
}

eco_press_locate_template(CMSMASTERS_ADMIN_INC . '/config-functions.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/theme-functions.php', true);

eco_press_locate_template(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php', true);

eco_press_locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php', true);

eco_press_locate_template(CMSMASTERS_ADMIN_INC . '/admin-scripts.php', true);

eco_press_locate_template(CMSMASTERS_ADMIN_INC . '/plugin-activator.php', true);

eco_press_locate_template(CMSMASTERS_CLASS . '/widgets.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/breadcrumbs.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/likes.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/pagination.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/single-comment.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/theme-fonts.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/theme-colors-primary.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/template-functions.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/template-functions-post.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/template-functions-project.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/template-functions-profile.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php', true);

eco_press_locate_template(CMSMASTERS_FUNCTION . '/template-functions-widgets.php', true);


$cmsmasters_wp_version = get_bloginfo('version');

if (version_compare($cmsmasters_wp_version, '5', '>=') || function_exists('is_gutenberg_page')) {
	require_once(get_template_directory() . '/gutenberg/cmsmasters-module-functions.php');
}


// Theme Colored Categories Functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	eco_press_locate_template(CMSMASTERS_FUNCTION . '/theme-colored-categories.php', true);
}


if (class_exists('Cmsmasters_Content_Composer')) {
	eco_press_locate_template(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php', true);
}


// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS) {
	eco_press_locate_template('cmsmasters-donations/function/template-functions-donation.php', true);
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	eco_press_locate_template('woocommerce/cmsmasters-woo-functions.php', true);
}

// Events functions
if (CMSMASTERS_EVENTS_CALENDAR) {
	eco_press_locate_template('tribe-events/cmsmasters-events-functions.php', true);
}



// Load Theme Local File
if (!function_exists('eco_press_load_theme_textdomain')) {
	function eco_press_load_theme_textdomain() {
		load_theme_textdomain('eco-press', get_template_directory() . '/' . CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'eco_press_load_theme_textdomain')) {
	add_action('after_setup_theme', 'eco_press_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('eco_press_theme_activation')) {
	function eco_press_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'eco-press') {
			add_option('cmsmasters_active_theme', 'eco-press', '', 'yes');
			
			
			eco_press_add_global_options();
			
			
			eco_press_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'eco_press_theme_activation');



// Framework Deactivation
if (!function_exists('eco_press_theme_deactivation')) {
	function eco_press_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'eco_press_theme_deactivation')) {
	add_action('switch_theme', 'eco_press_theme_deactivation');
}



// Plugin Activation Regenerate Styles
if (!function_exists('eco_press_plugin_activation')) {
	function eco_press_plugin_activation($plugin, $network_activation) {
		update_option('cmsmasters_plugin_activation', 'true');
		
		
		if ($plugin == 'classic-editor/classic-editor.php') {
			update_option('classic-editor-replace', 'no-replace');
		}
	}
}

add_action('activated_plugin', 'eco_press_plugin_activation', 10, 2);


if (!function_exists('eco_press_plugin_activation_regenerate')) {
	function eco_press_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			eco_press_regenerate_styles();
			
			eco_press_add_global_options();
			
			eco_press_add_global_icons();
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'eco_press_plugin_activation_regenerate');


function eco_press_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}


add_filter( 'comment_form_fields', 'eco_press_comment_field_to_bottom' );


function eco_press_run_reinit_import_options($post_id, $key, $value) {
	if (!get_post_meta($post_id, 'cmsmasters_heading', true)) {
		$custom_post_meta_fields = eco_press_get_custom_all_meta_fields();
		
		foreach ($custom_post_meta_fields as $field) {
			if ( 
				$field['type'] != 'tabs' && 
				$field['type'] != 'tab_start' && 
				$field['type'] != 'tab_finish' && 
				$field['type'] != 'content_start' && 
				$field['type'] != 'content_finish' 
			) {
				update_post_meta($post_id, $field['id'], $field['std']);
			}
		}
	}
	
	
	if ($key === 'cmsmasters_composer_show' && $value === 'true') {
		update_post_meta($post_id, 'cmsmasters_gutenberg_show', 'true');
	}
}

add_action('import_post_meta', 'eco_press_run_reinit_import_options', 10, 3);

