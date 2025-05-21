<?php
/**
 * Plugin Name: TT4 Tweaks
 * Description: This plugin tweaks various things in the Twenty Twenty-Four theme. Mainly the way the theme displays images on mobile.
 * Version: 0.0.1
 * Author: Karol K
 * Author URI: https://wpwork.shop/
 * License: GPL2
 * Text Domain: tt4-tweaks
 */

declare(strict_types=1);

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Plugin constants.
define('TT4_TWEAKS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('TT4_TWEAKS_PLUGIN_URL', plugin_dir_url(__FILE__));

// Enqueue scripts and styles.
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('tt4-tweaks-style', TT4_TWEAKS_PLUGIN_URL . 'css/tt4-tweaks.css', [], '1.0.0');
    wp_enqueue_script('tt4-tweaks-script', TT4_TWEAKS_PLUGIN_URL . 'js/tt4-tweaks.js', [], '1.0.0', true);
});