<?php
/**
 * Menu Right
 *
 * @package Page Builder Framework
 * @subpackage Template Parts
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<div class="wpbf-container wpbf-container-center wpbf-visible-large wpbf-nav-wrapper wpbf-menu-right">

	<div class="wpbf-grid wpbf-grid-collapse">

		<div class="wpbf-1-4 wpbf-logo-container">

			<?php get_template_part( 'inc/template-parts/logo/logo' ); ?>
			<?php get_template_part( 'inc/template-parts/logo/tagline' ); ?>

		</div>

		<div class="wpbf-3-4 wpbf-menu-container">

			<?php do_action( 'wpbf_before_main_menu' ); ?>

			<nav class="wpbf-clearfix" itemscope itemtype="http://schema.org/SiteNavigationElement">

				<?php do_action( 'wpbf_main_menu_open' ); ?>

				<?php do_action( 'wpbf_main_menu' ); ?>

			<?php do_action( 'wpbf_main_menu_close' ); ?>

			</nav>

			<?php do_action( 'wpbf_after_main_menu' ); ?>

		</div>

	</div>

</div>