<?php
	/*
	Plugin Name: Callback Request
	Plugin URI: http://www.joeybdesign.co.uk/callback-request-wp-plugin/
	Description: This plugin creates a quick and easy way to add a call back request form to your webpage using a shortcode. The user is asked for a name, phone number and ideal time and will then email you all their details.
	Author: J. Biesta
	Version: 1.4
	Author URI: http://www.joeybdesign.co.uk
	Text Domain: callback-request
	Domain Path: /lang
	*/
	/*  Copyright 2012  Jo Biesta  (email : jo@joeybdesign.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/// Admin Settings Page
function callback_settings() {
	include('callback_settings.php');
}
function callback_admin_actions() {
	add_menu_page('Callback Request', 'Callback Request', 1, 'Callback Request', 'callback_settings', plugins_url('callback-request/css/callback_request_ico.png'));
}
add_action('admin_menu', 'callback_admin_actions');

///Shortcode
function callback_outputbuffer(){
	include('callback_shortcode.php');
}
function callback_shortcode() {
	ob_start();
	callback_outputbuffer();
	$shortcode=ob_get_contents();
	ob_end_clean();
	return $shortcode;
}
add_shortcode('callback_shortcode', 'callback_shortcode');

///Javescript
function callback_js(){
	wp_register_script( 'callback_js', plugins_url('/js/jsvalidate.js', __FILE__), false);
	wp_enqueue_script( 'callback_js' );
}
add_action( 'wp_enqueue_scripts', 'callback_js');

///CSS
function callback_css(){
	wp_register_style( 'callback_css', plugins_url('/css/style.css', __FILE__), false, '1.0.0' );
	wp_enqueue_style( 'callback_css' );
}
add_action( 'wp_enqueue_scripts', 'callback_css');

///Translations
function callback_translations() {
	load_plugin_textdomain( 'callback-request', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}
add_action('plugins_loaded', 'callback_translations');

///Callback Email Sending
function callback_email_sending($name,$number,$time) {
	$mail_from = get_option('callback_em_sender');
	$mail_to = get_option('callback_em_receipt');
	$mail_subject_prefilter = get_option('callback_em_subject');
	
	if(ctype_digit($number)) {
		$mail_subject = str_replace(array('{name}','{number}','{time}'),array($name,$number,$time),$mail_subject_prefilter);
		$mail_message = sprintf( __( '%1$s has requested a callback at %2$s on %3$s.', 'callback-request' ), $name, $time, $number );
	
			$headers = 'From: '.$mail_from."\r\n".
			'Reply-To: '.$mail_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
	
				mail($mail_to, $mail_subject, $mail_message, $headers);?>
		<div class="successmsg"><?php _e( 'Thankyou, we will call you as requested', 'callback-request' );?></div>
	<?php
	}
else {?>
	<div class="errormsg"><?php _e( 'Unfortunately an error occured. Please ensure only numbers are used in the number field.', 'callback-request' );?></div>
<?php 
	}
}
?>