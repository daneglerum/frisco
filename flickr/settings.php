<div class="item-list-tabs no-ajax" id="subnav">
	<ul>
		<?php bp_get_options_nav() ?>
	</ul>
</div><!-- .item-list-tabs -->

<?php do_action( 'bp_before_member_flickr_content' ) ?>
<div class="flickr myflickr-settings">
	<?php do_action( 'bp_before_flickr_settings' ) ?>

	<form class="standard-form" method="post" action="">
		<h3>Flickr Account settings</h3>
		<p>To display your flickr feed on your profile you'll need your flickr account ID. Note that this isn't your normal username. You can get use <a href="http://idgettr.com">idGettr</a> to get your id. If you don't have a flickr account you can create one at <a href="http://flickr.com">flickr.com</a>.
		<fieldset>

			<label for="flickr_account"><span>Flickr UID</span></label>
			<input type="text" name="flickr_account" value="<?php echo bp_flickr_get_user_account();?>"/>
			</p>
			<?php wp_nonce_field( 'flickr_settings') ?>
			<input type="submit" name="save_settings" value="Save" />
			
		</fieldset>

	</form>






<?php do_action( 'bp_after_flickr_settings' ) ?>
	
</div><!-- flickr -->

<?php do_action( 'bp_after_member_flickr_content' ) ?>
