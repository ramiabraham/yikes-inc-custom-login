<div id="password-reset-form" class="widecolumn">

	<?php
		/** Custom Action Hook - Before Password Reset Form */
		do_action( 'yikes-custom-login-before-password-reset-form' );
	?>

	<?php if ( $attributes['show_title'] ) : ?>
		<h3><?php esc_attr_e( 'Pick a New Password', 'yikes-inc-custom-login' ); ?></h3>
	<?php endif; ?>

	<form id="yikes-reset-password-form" name="resetpassform" action="<?php echo site_url( 'wp-login.php?action=resetpass' ); ?>" method="post" autocomplete="off">
		<input type="hidden" id="user_login" name="login" value="<?php echo esc_attr( $attributes['login'] ); ?>" autocomplete="off" />
		<input type="hidden" name="key" value="<?php echo esc_attr( $attributes['key'] ); ?>" />

		<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
			<?php foreach ( $attributes['errors'] as $error ) : ?>
				<p class="login-error yikes-custom-login-alert yikes-custom-login-alert-danger yikes-animated <?php echo esc_attr( $this->options['notice_animation'] ); ?>">
					<?php echo wp_kses_post( $error ); ?>
				</p>
			<?php endforeach; ?>
		<?php endif; ?>

		<p>
			<label for="pass1"><?php esc_attr_e( 'New password', 'yikes-inc-custom-login' ) ?></label>
			<input type="password" name="pass1" id="pass1" class="input" size="20" value="" autocomplete="off" />
		</p>
		<p>
			<label for="pass2"><?php esc_attr_e( 'Repeat new password', 'yikes-inc-custom-login' ) ?></label>
			<input type="password" name="pass2" id="pass2" class="input" size="20" value="" autocomplete="off" />
		</p>

		<p class="description yikes-register-note"><small><em><?php echo str_replace( 'Hint', '<strong>' . __( 'Hint', 'yikes-inc-custom-login' ) . '</strong>', wp_get_password_hint() ); ?></em></small></p>

		<p class="resetpass-submit">
			<input type="submit" name="resetpass-submit" id="resetpass-button" class="button" value="<?php esc_attr_e( 'Reset Password', 'yikes-inc-custom-login' ); ?>" />
		</p>
	</form>

	<?php
		/** Custom Action Hook - After Password Reset Form */
		do_action( 'yikes-custom-login-after-password-reset-form' );
	?>

</div>
