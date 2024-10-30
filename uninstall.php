<?php
//if uninstall isnt called exit here
//if(!defined(WP_UNINSTALL_PLUGIN) exit();

if (
	!defined( 'WP_UNINSTALL_PLUGIN' )
||
	!WP_UNINSTALL_PLUGIN
||
	dirname( WP_UNINSTALL_PLUGIN ) != dirname( plugin_basename( __FILE__ ) )
) {
	status_header( 404 );
	exit;
}

//start deleting all sored options
delete_option('callback_em_sender');
delete_option('callback_em_receipt');
delete_option('callback_em_subject');
delete_option('callback_btnstyle_text');
delete_option('callback_btnstyle_background');
delete_option('callback_btnstyle_border');
delete_option('callback_btnstyle_border_width');
delete_option('callback_btnstyle_border_style');
delete_option('callback_btnstyle_align');
delete_option('callback_btnstyle_use');
?>

