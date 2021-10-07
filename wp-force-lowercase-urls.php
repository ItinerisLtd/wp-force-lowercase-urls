<?php

/**
 * Plugin Name:       Force Lowercase URLs
 * Plugin URI:        https://github.com/ItinerisLtd/wp-force-lowercase-urls
 * Description:       Force uppercase URLs to lowercase.
 * Version:           0.1.0
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Author:            Itineris Limited
 * Author URI:        https://www.itineris.co.uk/
 * Text Domain:       wp-force-lowercase-urls
 */

declare(strict_types=1);

namespace Itineris\WpForceLowercaseUrls;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

if (! class_exists(Plugin::class) && is_readable(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

Plugin::run();
