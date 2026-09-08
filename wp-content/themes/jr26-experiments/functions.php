<?php
/**
 * jr26-experiments functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since jr26-experiments 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'jr26_experiments_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since jr26-experiments 1.0
	 *
	 * @return void
	 */
	function jr26_experiments_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'jr26_experiments_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'jr26_experiments_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since jr26-experiments 1.0
	 *
	 * @return void
	 */
	function jr26_experiments_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'jr26_experiments_editor_style' );

// Enqueues the theme stylesheet on the front.
if ( ! function_exists( 'jr26_experiments_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front.
	 *
	 * @since jr26-experiments 1.0
	 *
	 * @return void
	 */
	function jr26_experiments_enqueue_styles() {
		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'jr26-experiments-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'jr26-experiments-style',
			'path',
			get_parent_theme_file_path( $src )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'jr26_experiments_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'jr26_experiments_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since jr26-experiments 1.0
	 *
	 * @return void
	 */
	function jr26_experiments_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'jr26-experiments' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'jr26_experiments_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'jr26_experiments_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since jr26-experiments 1.0
	 *
	 * @return void
	 */
	function jr26_experiments_pattern_categories() {

		register_block_pattern_category(
			'jr26_experiments_page',
			array(
				'label'       => __( 'Pages', 'jr26-experiments' ),
				'description' => __( 'A collection of full page layouts.', 'jr26-experiments' ),
			)
		);

		register_block_pattern_category(
			'jr26_experiments_post-format',
			array(
				'label'       => __( 'Post formats', 'jr26-experiments' ),
				'description' => __( 'A collection of post format patterns.', 'jr26-experiments' ),
			)
		);
	}
endif;
add_action( 'init', 'jr26_experiments_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'jr26_experiments_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since jr26-experiments 1.0
	 *
	 * @return void
	 */
	function jr26_experiments_register_block_bindings() {
		register_block_bindings_source(
			'jr26-experiments/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'jr26-experiments' ),
				'get_value_callback' => 'jr26_experiments_format_binding',
			)
		);
      register_block_bindings_source(
        'jr26-experiments/parent-title',
        array(
    		'label' => 'Post Parent',
    		'uses_context' => [ 'postId' ],
    		'get_value_callback' => 'jr26_experiments_parent_title_binding',
    	)
      );
	}
endif;
add_action( 'init', 'jr26_experiments_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'jr26_experiments_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since jr26-experiments 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function jr26_experiments_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;


function jr26_experiments_parent_title_binding($args, $instance) {
  if (
        $instance->context['postId']
        && $parent = get_post_parent($instance->context['postId'])
    ) {
        return get_the_title($parent);
    }

    return null;
}

add_filter( 'render_block_data', 'jr26_experiments_render_template_part_data' );

/**
 * Swap the "Post template" template parts based on the post format taxonomy.
 *
 * @param  array $parsed_block
 *
 * @return array
 */
function jr26_experiments_render_template_part_data( array $parsed_block ): array 
{
	// Only target the Template Part block with a `query-post-template-standard` slug and
	// when viewing a single post.
	if (
		( $parsed_block['blockName'] ?? '' ) !== 'core/template-part'
		|| ( $parsed_block['attrs']['slug'] ?? '' ) !== 'query-post-template-standard'
	) {
		return $parsed_block;
	}

    // $post = get_queried_object(); // returns the post holding the core/query, not the queried posts
    global $post; // is the currently queried post ;)
	if ( ! $post instanceof WP_Post ) {
		return $parsed_block;
	}

	// Get the directory where template parts live.
	$parts_dir = get_block_theme_folders()['wp_template_part'];

	$format = get_post_format( $post ) ? : 'standard';
	$slug   = "query-post-template-{$format}";
    if ( locate_template( "{$parts_dir}/{$slug}.html" ) ) {
        $parsed_block['attrs']['slug'] = $slug;
        return $parsed_block;
    }

	// No format-specific part found; return the original unchanged.
	return $parsed_block;
}


add_filter( 'default_wp_template_part_areas', 'jr26_experiments_template_part_areas' );
/**
 * Registers a new template part area for the post template block, which allows for a different template part to be used for each post format.
 *
 * @param  array $areas
 *
 * @return array
 */
function jr26_experiments_template_part_areas( array $areas ) :array
{
	$areas[] = array(
		'area'        => 'query-post-template',
		'area_tag'    => 'section',
		'label'       => __( 'Query Post Template', 'jr26_experiments' ),
		'description' => __( 'Uses a post template for each post format.', 'jr26_experiments' ),
		'icon'        => 'sidebar'
	);

	return $areas;
}