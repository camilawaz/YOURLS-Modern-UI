<?php
/*
Plugin Name: YOURLS Modern UI
Plugin URI: https://github.com/camilawaz/YOURLS-Modern-UI
Description: Add custom CSS to your YOURLS admin area. Some (very) opinionated CSS has already been added. Feel free to edit the CSS in this plugin.
Version: 1.0
Author: Camila Waz
Author URI: https://github.com/camilawaz/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

// Add the CSS to <head>
yourls_add_action( 'html_head', 'my_custom_css' );
function my_custom_css() { ?>

<style type="text/css">
  @@include('styles.min.css')
</style>
<?php }
