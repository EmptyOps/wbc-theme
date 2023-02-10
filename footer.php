<?php
/**
 * The Footer for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * 
 * If you have ever have further questions on templating standards of our theme then please visit https://sphereplugins.com/docs/how-to-override-templates-using-custom-html for more information, by visiting the link you can find anything regarding our theme temlates. And if you still have question then please contact us https://sphereplugins.com/contact-us/.
 *
 *
 * @package wbc_theme
 * @since 0.1
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

		do_action( 'wbc_theme_before_footer' );

		do_action( 'wbc_theme_footer' );

		do_action( 'wbc_theme_after_footer' );

		?>

	</div>

<?php do_action( 'wbc_theme_body_close' ); ?>

<?php wp_footer(); ?>

</body>

</html>