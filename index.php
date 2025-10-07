<?php

/**
 * Plugin Name: FG Sauce Banner
 * Description: Great banner to feature each sauce – shows corresponding image, title and headline if used in single post view. Picks up random recipe if used in other views.
 * Version: 1.01
 * Author: Fabian Genthner
 * Author URI: https://fabiangenthner.de/
 * License GPL v2
 * Text Domain: fg-sauce-banner
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) exit;

class FG_Sauce_Banner
{
    function __construct()
    {
        register_block_type_from_metadata(__DIR__ . '/build');
        add_action('init', [$this, 'load_translations']);
    }

    function load_translations()
    {
        $textdomain = 'fg-sauce-banner';

        load_plugin_textdomain(
            $textdomain,
            false,
            'fg-sauce-banner/languages/'
        );

        wp_set_script_translations(
            'fg-fg-sauce-banner-editor-script',
            $textdomain,
            plugin_dir_path(__FILE__) . 'languages'
        );
    }
}

$fg_sauce_banner = new FG_Sauce_Banner();
