<?php
/**
 * Plugin Name: JR26 experiments configuration
 * Description: Configuration for plugins used in JR26 experiments.
 * Version:     0.1.0
 * Author:      carstenbach
 */


/************************************************************************************************************************** 
 * 
 * GatherPress core plugin Configuration
 * 
 * @see https://github.com/GatherPress/gatherpress
 * 
 **************************************************************************************************************************/

add_filter(
	sprintf(
		'register_%s_post_type_args',
		'gatherpress_event'

	),
	'jr26_experiments_register_post_type_args',
);

/**
 * Filters the arguments for registering a post type.
 * 
 * This function removes the 'gatherpress-rsvp' and 'comments' supports from the post type arguments for the 'gatherpress_event' post type.
 *
 * @param array  $args      Array of arguments for registering a post type. See the register_post_type() function for accepted arguments.
 * @return array Array of arguments for registering a post type. See the register_post_type() function for accepted arguments.
 */
function jr26_experiments_register_post_type_args( array $args ) : array {
	$_rsvp = array_search(
		'gatherpress-rsvp',
		$args['supports']
	);
	unset( $args['supports'][$_rsvp] );
	$_comments = array_search(
		'comments',
		$args['supports']
	);
	unset( $args['supports'][$_comments] );
	return $args;
}



/************************************************************************************************************************** 
 * 
 * GatherPress "Productions" plugin Configuration
 * 
 * @see https://github.com/carstingaxion/gatherpress-productions
 * 
 **************************************************************************************************************************/



// /**
// * Filters the labels of a specific post type.
// *
// * @param object $labels Object with labels for the post type as member variables.
// * @return object Object with labels for the post type as member variables.
// */
// add_filter('post_type_labels_gatherpress_play',function ( object $labels ) : object {
// $labels->name = "Stuecke";
// $labels->singular_name = "Stueck";

// return $labels;
// } );




/************************************************************************************************************************** 
 * 
 * GatherPress "Relations" plugin Configuration
 * 
 * @see https://github.com/carstingaxion/gatherpress-relations
 * 




add_filter( 'gatherpress_relations_departments', function ( array $departments, string $source_type ): array {
    if ( 'gatherpress_person' === $source_type ) {
        return [
            'cast'             => __( 'Cast', 'textdomain' ),
            'direction'        => __( 'Direction', 'textdomain' ),
            'design'           => __( 'Design', 'textdomain' ),
            'stage_management' => __( 'Stage Management', 'textdomain' ),
            'musicians'        => __( 'Musicians', 'textdomain' ),
            'production'       => __( 'Production', 'textdomain' ),
            'other'            => __( 'Other', 'textdomain' ),
        ];
    }
    return $departments;
}, 10, 2 );
 **************************************************************************************************************************/




/************************************************************************************************************************** 
 * 
 * "Duplicate As" plugin configuration
 * 
 * @see https://github.com/carstingaxion/duplicate-as
 * 
 **************************************************************************************************************************/

add_action( 'init', 'jr26_experiments_duplicate_as_config', 11 );

function jr26_experiments_duplicate_as_config() {
	// Remove the "Duplicate As" menu item for the "post" and "page" post types.
	remove_post_type_support( 'post', 'duplicate_as' );
	remove_post_type_support( 'page', 'duplicate_as' );

	// Allow to duplicate "gatherpress_event" posts.
	add_post_type_support( 'gatherpress_event', 'duplicate_as' );
}


/************************************************************************************************************************** 
 * 
 * "Theater Production Subsites" plugin configuration
 * 
 * @see https://github.com/figuren-theater/theater-production-subsites
 * 
 **************************************************************************************************************************/
add_action( 'plugins_loaded', 'jr26_experiments_theater_production_subsites_config', 11 );

function jr26_experiments_theater_production_subsites_config() {
	add_post_type_support( 'gatherpress_play', 'hierachical-sub-post-type' );
}



/************************************************************************************************************************** 
 * 
 * WordPress core/breadcrumbs block configuration
 * 
 * @see https://make.wordpress.org/core/2026/03/04/breadcrumb-block-filters/
 * @see https://developer.wordpress.org/block-editor/reference-guides/core-blocks/core-blocks-theme/core-block-breadcrumbs/
 * 
 **************************************************************************************************************************/
add_filter( 'block_core_breadcrumbs_items', 'jr26_experiments_breadcrumbs_singular_events' );
add_filter( 'block_core_breadcrumbs_items', 'jr26_experiments_breadcrumbs_singular_events_of_plays' );
add_filter( 'block_core_breadcrumbs_items', 'jr26_experiments_breadcrumbs_singular_subsites_of_plays' );

function jr26_experiments_breadcrumbs_singular_subsites_of_plays( array $crumbs ): array {
    if ( ! is_singular('gatherpress_play_sub') ) {
        return $crumbs;
    }
	
    $post_id = get_queried_object_id();


	// Add a new crumb at the 2. postion, which is the post type archive of the parent page.
	$parent_post_id = wp_get_post_parent_id( $post_id );

	if ( $parent_post_id ) {
		$parent_post_type = get_post_type( $parent_post_id );

		if ( ! post_type_supports( $parent_post_type, 'hierachical-sub-post-type' ) ) {
			return $crumbs;
		}

		$parent_post_type_archive_url = get_post_type_archive_link( $parent_post_type );
		$parent_post_type_archive_label = post_type_archive_title( '', false ) ?: get_post_type_object( $parent_post_type )->labels->name;

		$crumbs = array_merge(
			array_slice( $crumbs, 0, 1 ),
			[
				[
					'label' => $parent_post_type_archive_label,
					'url'   => $parent_post_type_archive_url,
				],
			],
			array_slice( $crumbs, 1 )
		);
	}
    return $crumbs;
}

function jr26_experiments_breadcrumbs_singular_events( array $crumbs ): array {
    if ( ! is_singular( 'gatherpress_event' ) ) {
        return $crumbs;
    }

    $post_id = get_queried_object_id();
    foreach ( $crumbs as $index => &$crumb ) {

		// Find the event, which should have an empty URL.
		if ( !isset( $crumb['url'] ) ) {
			// Set the label, to be the events date and venue.
			$event = new \GatherPress\Core\Event( $post_id );
			$replacement_label = esc_html( $event->get_display_datetime() ) . ' @ ' . esc_html( $event->get_venue_information()['name'] );

			$crumb['label'] = $replacement_label;
			break;
		}
    }
    unset( $crumb );
    return $crumbs;
}

function jr26_experiments_breadcrumbs_singular_events_of_plays( array $crumbs ): array {
    if ( ! is_singular( 'gatherpress_event' ) ) {
        return $crumbs;
    }

    $post_id = get_queried_object_id();
    
    // Check if the event is related to your special taxonomy.
    $special_terms = get_the_terms( $post_id, '_gatherpress_play' );
    
    if ( is_wp_error( $special_terms ) || empty( $special_terms ) ) {
        return $crumbs;
    }

    // Walk the crumbs and replace the post type archive entry.
    $event_archive_url = get_post_type_archive_link( 'gatherpress_event' );

    foreach ( $crumbs as $index => &$crumb ) {
      // Identify the PT archive crumb by its URL.
        if ( isset( $crumb['url'] ) && untrailingslashit( $crumb['url'] ) === untrailingslashit( $event_archive_url ) ) {
            // Replace with a different archive, e.g. a custom CPT or taxonomy archive.
            $replacement_archive = get_post_type_archive_link( 'gatherpress_play' );
            $replacement_label   = post_type_archive_title( '', false ) ?: get_post_type_object( 'gatherpress_event' )->labels->name;

            // Or point to the taxonomy archive instead:
            // $term                = $special_terms[0];
            // $replacement_archive = get_term_link( $term );
            // $replacement_label   = $term->name;

            $crumb['url']   = $replacement_archive;
            $crumb['label'] = $replacement_label;
            break;
        }

    }
    unset( $crumb );
    return $crumbs;
}