<?php
/**
 * Footer
 *
 * Construct the Theme Footer
 *
 * @package Page Builder Framework
 * @subpackage Template Parts
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// vars
$footer_layout = get_theme_mod( 'footer_layout' );
$layout = $footer_layout == 'one' ? ' wpbf-footer-one-column' : ' wpbf-footer-two-columns';
$inner_layout = $footer_layout == 'one' ? 'wpbf-inner-footer-content' : 'wpbf-inner-footer-left';
$footer_column_one = get_theme_mod( 'footer_column_one' );
$footer_column_two = get_theme_mod( 'footer_column_two' );

// fallbacks/defaults
$footer_layout = $footer_layout == false ? 'two' : $footer_layout;
$footer_column_one = $footer_column_one == false ? '&copy; [year] - [blogname] | All rights reserved' : $footer_column_one;
$footer_column_two = $footer_column_two == false ? 'Powered by <a href="https://wp-pagebuilderframework.com/">Page Builder Framework</a>' : $footer_column_two;

// replace year and blogname "shortcodes"
$footer_column_one = str_replace( '[year]', date( 'Y' ), $footer_column_one );
$footer_column_one = str_replace( '[blogname]', get_option( 'blogname' ), $footer_column_one );

$footer_column_two = str_replace( '[year]', date( 'Y' ), $footer_column_two );
$footer_column_two = str_replace( '[blogname]', get_option( 'blogname' ), $footer_column_two );

?>

		<footer class="wpbf-page-footer" itemscope itemtype="http://schema.org/WPFooter">

			<?php do_action( 'wpbf_footer_open' ); ?>

			<div class="wpbf-inner-footer wpbf-container wpbf-container-center<?php echo esc_attr( $layout ); ?>">

				<div class="<?php echo esc_attr( $inner_layout ); ?>">

					<?php

						wp_nav_menu( array(
							'theme_location'	=>		'footer_menu',
							'container'			=>		false,
							'menu_class'		=>		'wpbf-menu',
							'depth'				=>		'1',
							'fallback_cb'		=>		false,
						));

					?>

					<?php echo do_shortcode( apply_filters( 'footer-column-left', $footer_column_one ) ); ?>

				</div>

				<?php if ( $footer_layout == 'two' ) { ?>

				<div class="wpbf-inner-footer-right">

					<?php echo do_shortcode( apply_filters( 'footer-column-right', $footer_column_two ) ); ?>

					<?php

						wp_nav_menu( array(
							'theme_location'	=>		'footer_menu_right',
							'container'			=>		false,
							'menu_class'		=>		'wpbf-menu',
							'depth'				=>		'1',
							'fallback_cb'		=>		false,
						));

					?>

				</div>

				<?php } ?>

			</div>

			<?php do_action( 'wpbf_footer_close' ); ?>

		</footer>