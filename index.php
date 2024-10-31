<?php
/**
 * Scroll Top pro
 *
 * @package           Scroll Top pro
 * @author            Xian Saiful
 * @copyright         2020 xian saiful
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Scroll Top pro
 * Plugin URI:        https://xiansaiful.com/
 * Description:       Just click and go back to top.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Xian Saiful
 * Author URI:        facebook.com/xian.saiful
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_action('wp_enqueue_scripts', function(){

	// Include stylesheet file
	wp_enqueue_style('fontawesome', PLUGINS_URL('css/font-awesome.min.css', __FILE__));
	wp_enqueue_style('stylesheets', PLUGINS_URL('css/style.css', __FILE__));

	// Include js file
	wp_enqueue_script('scriptsshet', PLUGINS_URL('js/scripts.js', __FILE__), array('jquery'), true, true);

});

// function start

add_action('wp_footer', 'scroll_to_top');

function scroll_to_top(){

	?>

	<!-- scroll_to_top -->
	<div class="top-scroll">
		<a href="#"><i class="fa fa-arrow-up scroll-icon" aria-hidden="true"></i></a>
	</div>



<?php


}