<?php
/*
Plugin Name: Example Contact Form Plugin
Plugin URI: http://example.com
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
Author: Agbonghama Collins
Author URI: http://w3guy.com
*/
 
function html_form_code() {
    echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<p>';
    echo '<input type="email" name="cf-email" placeholder="Email"' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />';
    echo '</p>';
    echo '<p><input type="submit" name="cf-submitted" value="RECEVOIR INFOS"></p>';
    echo '</form>';
}
 
function deliver_mail() {
 
    // if the submit button is clicked, send the email
    if ( isset( $_POST['cf-submitted'] ) ) {
 
        // sanitize form values
        $email   = sanitize_email( $_POST["cf-email"] );
 
        // get the blog administrator's email address
        $to = get_option( 'admin_email' );
 
        $headers = "From: $email <$email>" . "\r\n";
 		$subject = "Inscription newsletter";
        // If email has been process for sending, display a success message
        if ( wp_mail( $to, $subject, $email, $headers ) ) {
            echo '<div>';
            echo '<p class="confirm">Email enregistré! Merci.</p>';
            echo '</div>';
        } else {
            echo 'Ohh...Erreur.';
        }
    }
}
 
function cf_shortcode() {
    ob_start();
    deliver_mail();
    html_form_code();
 
    return ob_get_clean();
}
 
add_shortcode( 'sitepoint_contact_form', 'cf_shortcode' );
 
?>