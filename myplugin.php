<?php
/**
 * Plugin Name: MyPlugin
 * Description: This plugin is used to displays a header bar with current date mentioned!
 * Author: Anshul Sharma
 * Author URI: https://authoruri.com
 * Version: 1.0.0
 * Text Domain: My Plugin
 */

   add_action('wp_head', 'myplugin');

 function myplugin() {
    $current_date = date('F j, Y (l)');

    echo '<div style="text-align: center; padding: 10px; background-color: #000; color: #ffffff">';
    echo '<p>Current Date: ' . esc_html($current_date) . '</p>';
    echo '</div>';
   }

 ?>