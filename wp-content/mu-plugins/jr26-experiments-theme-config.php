<?php
/**
 * Plugin Name: Subsite Theme Style Variations
 * Description: Assigns a theme style variation per subsite (Playground-compatible).
 */

add_filter( 'wp_theme_json_data_theme', function( $theme_json ) {
	if ( ! is_multisite() ) {
		return $theme_json;
	}

	$current_site = get_site();
	$site_path    = $current_site ? $current_site->path : '';

	// Keyword to match anywhere in the path => style variation filename in styles/
	$site_variations = array(
		'oma'          => '03-dusk',       // Matches /scope:xxx/oma.juliaraab-de/ or /oma-juliaraab-de/
		'taschen'      => '07-sunrise',   // Matches /scope:xxx/taschen.juliaraab-de/
  		'heimatsehnen' => '04-afternoon',   // Matches /scope:xxx/heimatsehnen.juliaraab-de/

	);

	$matched_variation = null;
	foreach ( $site_variations as $needle => $variation_name ) {
		if ( false !== strpos( $site_path, $needle ) ) {
			$matched_variation = $variation_name;
			break;
		}
	}

	if ( $matched_variation ) {
		$variation_file = get_stylesheet_directory() . '/styles/' . sanitize_file_name( $matched_variation ) . '.json';

		if ( file_exists( $variation_file ) ) {
			$data = json_decode( file_get_contents( $variation_file ), true );

			if ( is_array( $data ) ) {
				$theme_json->update_with( $data );
			}
		}
	}

	return $theme_json;
} );