<?php
/*
Plugin Name: Expire Password Protected Pages
Plugin URI: https://wordpress.org/plugins/expire-password-protected-pages/
Description: This plugin will require visitor to type in the password each time they are visiting a password protected page. This also will prevent the page from being accessable if someone logins via a public computer. 
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
