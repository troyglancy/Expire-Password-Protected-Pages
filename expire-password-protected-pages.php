<?php
/*
Plugin Name: Expires Password Protected Pages
Plugin URI: 
Description: This plugin will require vistior to type in password each time when visiting a password protected page. This will prevent the page from being accessable if someone logins via a public computer. 
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