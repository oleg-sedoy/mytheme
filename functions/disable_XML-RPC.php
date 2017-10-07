<?php 

/**
 *
 * This could cause security issues and can be exploited by hackers.
 *
 */
add_filter('xmlrpc_enabled', '__return_false');
?>