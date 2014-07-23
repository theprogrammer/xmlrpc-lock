<?php
/* 

Plugin Name: xmlrpc-lock
Plugin URI: http://planetzuda.com/plugins/
Description: Locks the xmlrpc down for good. 
Version: 0.0.1
Author: Planet Zuda, LLC
Author URI: http://planetzuda.com/news/plugins/
License: GPL v2 
License URI: GPL v2
*/
// note: Future versions will write this to .htaccess if chmod doesn't work.
//unset(xmlrpc_rsd_apis());
function xmlrpc_electric()
{
$function = apply_filters( 'wp_die_xmlrpc_handler', '_xmlrpc_wp_die_handler' );
$message = 'protected by electrifying security.';
$title = 'leave';
if(defined( 'XMLRPC_REQUEST' ) && XMLRPC_REQUEST)
call_user_func($function, $message,$title);
}
add_action('plugins_loaded','xmlrpc_electric');
?>