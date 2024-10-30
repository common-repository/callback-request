<?php
$align = get_option('callback_btnstyle_align');
$button_border = get_option('callback_btnstyle_border');
$button_border_style = get_option('callback_btnstyle_border_style');
$button_border_width = get_option('callback_btnstyle_border_width');
$button_background = get_option('callback_btnstyle_background');
$button_text = get_option('callback_btnstyle_text');
$callback_submit_style = get_option('callback_btnstyle_use');
if ($callback_submit_style == 1) {?>
<style media="screen" type="text/css">
.callback-submit  {
	border: <?php echo $button_border_width;?>px <?php echo $button_border_style;?> <?php echo $button_border;?> !important;
	background: <?php echo $button_background;?> !important;
	color: <?php echo $button_text;?> !important;
	cursor: pointer;
}
</style>
<?php }
	if($_POST['callback_fe_hidden'] == 'Y') {
	$name = $_POST['callback_fe_name'];
	$number = $_POST['callback_fe_number'];
	$time = $_POST['callback_fe_time'];
	callback_email_sending($name,$number,$time);
	}
?>
<div id="callback_form">
<form name="callback" method="post" action="<?php str_replace( '%7e', '~', $_SERVER['REQUEST_URI']); ?>" onsubmit="return validateform();">
<input type="hidden" name="callback_fe_hidden" value="Y">

<?php _e( 'Name', 'callback-request' );?>: <input type="text" name="callback_fe_name" size="15"> <?php _e( 'Number', 'callback-request' );?>: <input type="text" name="callback_fe_number" size="15">
<?php _e( 'Suitable Time', 'callback-request' );?>: <input type="text" name="callback_fe_time" size="3"> 
<div id="callback_submit" align="<?php echo $align;?>"><input type="submit" class="callback-submit" name="Submit" Value="<?php _e( 'Request Callback', 'callback-request' );?>"/></div>
</form></div>