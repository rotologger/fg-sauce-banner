<?php

/**
 * Plugin Name: FG Sauce Banner
 * Description: Great banner to feature each sauce – shows corresponding image, title and headline if used in single post view. Picks up random recipe if used in other views.
 * Version: 1.0
 * Author: Fabian Genthner
 * Author URI: https://fabiangenthner.de/
 * License GPL v2
 * Text Domain: fg-sauce-banner
 */

if (!defined('ABSPATH')) exit;

class FG_Sauce_Banner
{
    function __construct()
    {
        register_block_type_from_metadata(__DIR__ . '/build');
    }
}

$fg_sauce_banner = new FG_Sauce_Banner();
