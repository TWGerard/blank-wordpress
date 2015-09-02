<?php

/* get_asset_path($asset)
Used to get the path to a file in the assets directory
ie `<img src="<?php echo get_asset_path('images/logo.png');" />`
*/
if (!function_exists('get_asset_path')) {
  function get_asset_path($asset) {
    return get_template_directory_uri() . '/assets/' . trim($asset, '/\\');
  }
}

/* asset_path($asset)
Helper method to output results of get_asset_path($asset)
*/
if (!function_exists('asset_path')) {
  function asset_path($asset) {
    echo get_asset_path($asset);
  }
}

/* theme_scripts_and_styles()
Uses `wp_enqueue_scripts` hook to add stylesheets and scripts to the `<head>`
*/
if (!function_exists('theme_scripts_and_styles')) {
  function theme_scripts_and_styles() {
    wp_enqueue_style('main', get_asset_path('stylesheets/style.css'));
  }
  add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');
}

