<?php
/**
 * Plugin Name: Variable Dumper
 * Description: A simple plugin to dump variable contents for debugging purposes.
 * Version: 1.0
 * Author: Your Name
 */

// Ensure the script is not accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('dump')) {
    function dump(...$vars) {
        echo '<pre style="background: #f9f9f9; border: 1px solid #ccc; padding: 10px; margin: 10px; border-radius: 4px;">';
        foreach ($vars as $var) {
            var_dump($var);
        }
        echo '</pre>';
    }
}

if (!function_exists('dd')) {
    function dd(...$vars) {
        dump(...$vars);
        die();
    }
}
