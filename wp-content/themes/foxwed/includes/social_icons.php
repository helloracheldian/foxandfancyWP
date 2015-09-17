<ul class="et-social-icons">

<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-facebook">
		<a href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Facebook', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-twitter">
		<a href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>" class="icon" target="_blank" >
			<span><?php esc_html_e( 'Twitter', 'Divi' ); ?></span>
		</a>
	</li>

<?php endif; ?>

	<li class="et-social-icon et-social-instagram">
		<a href="http://instagram.com/foxandfancy" class="icon" target="_blank">
			<span><?php esc_html_e( 'Instagram', 'Divi' ); ?></span>
		</a>
	</li>

	<li class="et-social-icon et-social-pinterest">
		<a href="http://pinterest.com/alwaysetcetera" class="icon" target="_blank">
			<span><?php esc_html_e( 'Pinterest', 'Divi' ); ?></span>
		</a>
	</li>

</ul>