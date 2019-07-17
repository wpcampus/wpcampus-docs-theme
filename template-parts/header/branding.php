<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$search_query = get_search_query();

?>
<div class="site-branding">
	<div class="header-inside">
		<div class="site-logo-wrapper">
			<a href="/">
				<img class="site-logo" alt="" src="<?php echo get_theme_file_uri( '/assets/images/wpcampus-logo.svg' ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>">
				<span class="site-label"><span class="screen-reader-text">WPCampus</span> Documentation</span>
			</a>
		</div>
		<button class="search-toggle" aria-hidden="true" title="Search"></button>
	</div>
	<?php

	/**
	 * Saving for later.
	if ( is_front_page() && is_home() ) {
		?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
	} else {
		?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php
	}*/

	?>
</div><!-- .site-branding -->
<div class="site-search">
	<div class="header-inside">
		<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label for="search">Search:</label>
			<input id="search" type="search" class="search-field" placeholder="Search the site" value="<?php echo $search_query; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>" name="s" aria-label="Search the site">
			<button class="search-cancel search-button" aria-label="Cancel search" title="Cancel" aria-hidden="true"></button>
			<input type="submit" class="search-submit search-button" aria-label="Search" title="Search" value="">
		</form>
	</div>
</div>
