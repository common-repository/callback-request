<script type="text/javascript" src="<?php echo plugins_url();?>/callback-request/js/jscolor.js"></script>
<?php 
	if($_POST['callback_hidden'] == 'Y') {

	$emsender = $_POST['callback_em_sender'];
	update_option('callback_em_sender',$emsender);

	$emreceipt = $_POST['callback_em_receipt'];
	update_option('callback_em_receipt',$emreceipt);

	$emsubject = $_POST['callback_em_subject'];
	update_option('callback_em_subject',$emsubject);
	
	$callback_btnstyle_text = $_POST['callback_btnstyle_text'];
	update_option('callback_btnstyle_text',$callback_btnstyle_text);
	
	$callback_btnstyle_background = $_POST['callback_btnstyle_background'];
	update_option('callback_btnstyle_background',$callback_btnstyle_background);
	
	$callback_btnstyle_border = $_POST['callback_btnstyle_border'];
	update_option('callback_btnstyle_border',$callback_btnstyle_border);
	
	$callback_btnstyle_border_width = $_POST['callback_btnstyle_border_width'];
	update_option('callback_btnstyle_border_width',$callback_btnstyle_border_width);
	
	$callback_btnstyle_border_style = $_POST['callback_btnstyle_border_style'];
	update_option('callback_btnstyle_border_style',$callback_btnstyle_border_style);
	
	$callback_btnstyle_align = $_POST['callback_btnstyle_align'];
	update_option('callback_btnstyle_align',$callback_btnstyle_align);
	
	$callback_btnstyle_use = $_POST['callback_btnstyle_use'];
	update_option('callback_btnstyle_use',$callback_btnstyle_use);
	
	if ($callback_btnstyle_use == 1){
		$use_checked = 'checked';
	}
	else
	{}

?>
<div class="updated"><p><strong><?php _e( 'Settings Saved', 'callback-request' );?></strong></p></div>
<?php
}
else {
	$emsenderdefault = get_option('admin_email');
	$emreceiptdefault = get_option('admin_email');
	$emsender = get_option('callback_em_sender',$emsenderdefault);
	$emreceipt = get_option('callback_em_receipt',$emreceiptdefault);
	$emsubject = get_option('callback_em_subject','{name} has requested a callback on {number} at {time}');
	$callback_btnstyle_text = get_option('callback_btnstyle_text','#000000');
	$callback_btnstyle_background = get_option('callback_btnstyle_background','#FFFFFF');
	$callback_btnstyle_border = get_option('callback_btnstyle_border','#FFFFFF');
	$callback_btnstyle_border_width = get_option('callback_btnstyle_border_width','1');
	$callback_btnstyle_border_style = get_option('callback_btnstyle_border_style','Solid');
	$callback_btnstyle_align = get_option('callback_btnstyle_align','');
	$callback_btnstyle_use = get_option('callback_btnstyle_use','');
	if ($callback_btnstyle_use == 1) {
		$use_checked = 'checked';
	}
}
?>
<div class="wrap">
<?php echo "<h2>" . __('Callback Request Settings Page', 'callback-request' ) . "</h2>"?>
<hr />
<form name="callback_form" method="post" action="<?php echo str_replace( '%7e', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="callback_hidden" value="Y">
    
<?php echo "<h4>" . __('Callback Request Email Settings', 'callback-request') . "</h4>"; ?>

<p><?php _e( 'Sender: ' );?><input type="text" name="callback_em_sender" value="<?php echo $emsender; ?>" size="25"><br />
<small>e.g.: callback@joeybdesign.co.uk - <?php _e( 'This is who the email is sent from to you.', 'callback-request' );?></small></p>

<p><?php _e( 'Your Email: ' );?><input type="text" name="callback_em_receipt" value="<?php echo $emreceipt; ?>" size="25"><br />
<small>e.g.: info@joeybdesign.co.uk - <?php _e( 'This is who the script will send callback request emails to.', 'callback-request' );?></small></p>

<p><?php _e( 'Email Subject: ' );?><input type="text" name="callback_em_subject" value="<?php echo $emsubject; ?>" size="50"><br />
<b>Note :</b><medium><?php _e('The Email Subject can now contain {name} {number} and {time} these tags will be replaced with the details from the user requesting the callback. ','callback-request');?></medium><br />
<small> <?php _e( 'e.g.: {name} has requested a callback on {number}. ', 'callback-request');?></small></p>
    <hr />
    
<?php echo "<h4>" . __('Callback Request Style Settings', 'callback-request' ) . "</h4>";?>

<p><?php _e( 'Use Button Styling: ', 'callback-request');?>
<input type="checkbox" name="callback_btnstyle_use" value="1" <?php echo $use_checked;?>></p>
    
<p><?php _e( 'Button Text Colour: ', 'callback-request');?>
<input class="color {hash:true}" name="callback_btnstyle_text" value="<?php echo $callback_btnstyle_text; ?>" size="10"></p>

<p><?php _e( 'Button Background Colour: ', 'callback-request');?>
<input class="color {hash:true}" name="callback_btnstyle_background" value="<?php echo $callback_btnstyle_background; ?>" size="10"></p>

<p><?php _e( 'Button Border Colour: ', 'callback-request');?>
<input class="color {hash:true}" name="callback_btnstyle_border" value="<?php echo $callback_btnstyle_border; ?>" size="10"></p>

<p><?php _e( 'Button Border Style: ', 'callback-request');?>
<select name="callback_btnstyle_border_style">
	<option value='None' <?php if($callback_btnstyle_border_style == 'None') echo "selected";?>><?php _e('None','callback-request');?></option>
	<option value='Solid' <?php if($callback_btnstyle_border_style == 'Solid') echo "selected";?>><?php _e('Solid','callback-request');?></option>
	<option value='Double' <?php if($callback_btnstyle_border_style == 'Double') echo "selected";?>><?php _e('Double','callback-request');?></option>
    <option value='Inset' <?php if($callback_btnstyle_border_style == 'Inset') echo "selected";?>><?php _e('Inset','callback-request');?></option>
    <option value='Outset' <?php if($callback_btnstyle_border_style == 'Outset') echo "selected";?>><?php _e('Outset','callback-request');?></option>
</select></p>

<p><?php _e( 'Button Border Thickness: ', 'callback-request');?>
<select name="callback_btnstyle_border_width">
	<option value='1' <?php if($callback_btnstyle_border_width == '1') echo "selected";?>><?php _e('1','callback-request');?></option>
	<option value='2' <?php if($callback_btnstyle_border_width == '2') echo "selected";?>><?php _e('2','callback-request');?></option>
	<option value='3' <?php if($callback_btnstyle_border_width == '3') echo "selected";?>><?php _e('3','callback-request');?></option>
    <option value='4' <?php if($callback_btnstyle_border_width == '4') echo "selected";?>><?php _e('4','callback-request');?></option>
    <option value='5' <?php if($callback_btnstyle_border_width == '5') echo "selected";?>><?php _e('5','callback-request');?></option>
</select></p>

<p><?php _e( 'Button Alignment: ', 'callback-request');?>
<select name="callback_btnstyle_align">
	<option value='Left' <?php if($callback_btnstyle_align == 'Left') echo "selected";?>><?php _e('Left','callback-request');?></option>
	<option value='Right' <?php if($callback_btnstyle_align == 'Right') echo "selected";?>><?php _e('Right','callback-request');?></option>
	<option value='Center' <?php if($callback_btnstyle_align == 'Center') echo "selected";?>><?php _e('Center','callback-request');?></option>
</select>
    
	<p class="submit">
	<input type="submit" name="Submit" class="button-primary" Value="<?php _e('Save Settings','callback-request');?>" />
	</p>
</form>
</div>
<hr />
Callback Request Form WP Plugin by <a href="http://joeybdesign.co.uk" target="_new">Jo Biesta</a>


<?php
echo str_replace(array('{name}','{number}','{time}'),array($name,$number,$time),$subject);