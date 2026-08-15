<?php
/**
 * Title: Heading and search form
 * Slug: jr26-experiments/cta-heading-search
 * Categories: call-to-action
 * Description: Large heading with a search form for quick navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since jr26-experiments 1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'What are you looking for?', 'jr26-experiments' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Search form label.', 'jr26-experiments' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Type here...', 'Search input field placeholder text.', 'jr26-experiments' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Button text. Verb.', 'jr26-experiments' ); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
