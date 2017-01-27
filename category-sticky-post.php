<?php
/**
 * Category Sticky Post
 *
 * Mark a post to be placed at the top of a specified category archive. It's sticky posts specifically for categories.
 *
 * @package   Category_Sticky_post
 * @author    Professional Themes <support@professionalthemes.nyc>
 * @license   GPL-2.0+
 * @link      https://wordpress.org/plugins/category-sticky-post/
 * @copyright 2013 - 2017 Professional Themes
 *
 * @wordpress-plugin
 * Plugin Name: Category Sticky Post
 * Plugin URI: 	https://wordpress.org/plugins/category-sticky-post/
 * Description: Mark a post to be placed at the top of a specified category archive. It's sticky posts specifically for categories.
 * Version:     2.10.1
 * Author:      Professional Themes
 * Author URI:  https://professionalthemes.nyc
 * Text Domain: category-sticky-post
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-category-sticky-post.php' );
add_action( 'plugins_loaded', array( 'Category_Sticky_Post', 'get_instance' ) );
