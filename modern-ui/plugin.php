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
  body{padding:0;margin:0;background:#fff;font-size:14px}header,nav{height:60px;border-bottom:1px solid #f7f7f7;display:-ms-inline-flexbox;display:inline-flex}header{-ms-flex-align:center;align-items:center;width:40%}header a,header h1{float:none;width:100%;max-width:100%}header a{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;font-size:14px;font-weight:400;padding:0 10px}header a span:not(:first-child){margin-left:5px}header a img{-ms-flex-order:-1;order:-1;height:50px;width:auto;margin-right:10px}nav{width:60%;float:right}nav li,nav li a,nav ul{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}nav ul#admin_menu{width:100%;-ms-flex-pack:end;justify-content:flex-end;margin:0;min-height:auto;font-size:14px}nav ul#admin_menu li{height:100%}nav ul#admin_menu li:first-child{border-left:1px solid #f7f7f7;-ms-flex-order:10;order:10;color:#c7c7c7;padding:0 10px;font-size:12px}nav ul#admin_menu li:first-child strong{margin:0 2.5px}nav ul#admin_menu li:first-child a{padding:0}nav ul#admin_menu li a{height:100%;padding:0 15px;color:#5bb3df;transition:all .3s ease-in-out}nav ul#admin_menu li a:hover{text-decoration:none;color:#2a85b3}nav ul#admin_menu li a:not([title=Logout]):hover{background:rgba(247,247,247,.5)}#wrap{max-width:100%;font-size:14px;border:0;padding:0;margin:0 auto;min-height:calc(100vh - 60px)}#footer{border-top:1px solid #f7f7f7;height:60px;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;margin:0}#footer p{text-align:left;border:0;border-radius:0}
/*# sourceMappingURL=styles.min.map */

</style>
<?php }
