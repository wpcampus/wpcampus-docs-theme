<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="wpc-skip-to-content search-toggle search-force" href="#search"><?php esc_html_e( 'Skip to search', 'wp-rig' ); ?></a>
	<?php

	// Print network banner.
	if ( function_exists( 'wpcampus_print_network_banner' ) ) {
		wpcampus_print_network_banner( array( 'skip_nav_id' => 'primary' ) );
	}

	$search_query = get_search_query();

	$site_header_class = 'site-header';

	if ( ! empty( $search_query ) ) {
		$site_header_class .= ' search-open';
	}

	?>
	<header id="masthead" class="<?php echo $site_header_class; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>">
		<?php get_template_part( 'template-parts/header/custom_header' ); ?>

		<?php get_template_part( 'template-parts/header/branding' ); ?>

		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
	<?php

	if ( function_exists( 'wpcampus_print_network_notifications' ) ) {
		wpcampus_print_network_notifications();
	}

	?>
	<div id="page" class="site">
