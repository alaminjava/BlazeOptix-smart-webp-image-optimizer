<?php
/**
 * Plugin Name:       BlazeOptix – Advanced Free Image Optimizer
 * Plugin URI:        https://github.com/yourusername/blazeoptix
 * Description:       A powerful, unlimited, local image optimizer with WebP + AVIF, background processing, backups, and one-click restore. Real competitor to paid plugins like ShortPixel and Imagify. 100% free & open source.
 * Version:           2.0.0
 * Author:            Al-Amin + Grok
 * Author URI:        https://github.com/yourusername
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       blazeoptix
 * Requires at least: 6.0
 * Requires PHP:      7.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('BLAZEOPTIX_VERSION', '2.0.0');
define('BLAZEOPTIX_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('BLAZEOPTIX_PLUGIN_URL', plugin_dir_url(__FILE__));

// Load Action Scheduler (bundled)
if (!class_exists('ActionScheduler')) {
    require_once BLAZEOPTIX_PLUGIN_DIR . 'action-scheduler/action-scheduler.php';
}

// Load main class
require_once BLAZEOPTIX_PLUGIN_DIR . 'includes/class-blazeoptix.php';

BlazeOptix::get_instance();
