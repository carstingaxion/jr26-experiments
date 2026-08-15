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