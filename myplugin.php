<?php
/**
 * Plugin Name: MyPlugin
 * Description: This plugin is used to displays a header bar with current date mentioned!
 * Author: Anshul Sharma
 * Author URI: https://authoruri.com
 * Version: 1.0.0
 * Text Domain: My Plugin
 */

if(!is_admin()
 && strpos($_SERVER['REQUEST_URI'], 'wp-login.php') === false 
 && strpos($_SERVER['REQUEST_URI'], 'wp-signup.php') === false) { 

   add_action('init', 'myplugin');

 function myplugin() {
    $current_date = date('F j, Y (l)');

    echo '<div style="text-align: center; padding: 10px; background-color: #000; color: #ffffff">';
    echo '<p>Current Date: ' . esc_html($current_date) . '</p>';
    echo '</div>';
   }

}
 ?>