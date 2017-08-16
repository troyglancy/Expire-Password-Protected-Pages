<?php
/*
Plugin Name: Expire Password Protected Pages
Plugin URI: https://wordpress.org/plugins/expire-password-protected-pages/
Description: This plugin will require visitors to type in the password each time they are visiting a password protected page. This will also prevent the page from being accessible if someone types in the password on a public computer.  By default WordPress password protected pages sessions will last 10 days. Originally came up with this idea when a client did not want a password protected pages accessable after the browser was closed. While you could add the code to your function.php within your theme I did not want the code to get overwritten when doing a theme update. Using this plugin avoids the need for updating the function.php file. 
Version: 0.1.0
Author: Troy Glancy 
Author URI: http://troyglancy.com
Text Domain: troyglancy
Domain Path: 
*/

add_action( 'wp', 'post_expire_password_protected_pages' );
    function post_expire_password_protected_pages() {
        if ( isset( $_COOKIE['wp-postpass_' . COOKIEHASH] ) ) {
            setcookie('wp-postpass_' . COOKIEHASH, '', 0, COOKIEPATH);
        }
}

?>
