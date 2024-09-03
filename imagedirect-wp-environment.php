<?php

declare(strict_types=1);

namespace imageDirect\Wordpress\Environment;

/**
 * Plugin Name:       imageDirect Wordpress Environment
 * Plugin URI:        <https://www.imagedirect.com.au/>
 * Description:       This is the development environment plugin for imageDirect - Get found in the noise.
 * Requires at least: 6.5
 * Requires PHP:      8.0
 * Version:           0.0.2
 * Author:            imageDirect Pty Ltd
 * Author URI:        <https://www.imagedirect.com.au/>
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Contributors:      imageDirect WebTeam
 * Text Domain:       imagedirect-wp-environment
 */

defined('ABSPATH') || exit;

/**
 * Static
 * @since   0.0.1
 */
function plugin(): Plugin
{
    static $plugin;

    if (null !== $plugin) {
        return $plugin;
    }

    $plugin = new Plugin();
    return $plugin;
}

/**
 * Plugin
 * @since   0.0.1
 */
class Plugin
{
    public function load(): void {}
}

add_action(
    'plugins_loaded',
    function () {
        plugin()->load();
    },
    100
);
