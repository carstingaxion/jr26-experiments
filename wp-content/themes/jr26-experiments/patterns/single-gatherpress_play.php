<?php
/**
 * Title: single-gatherpress_play
 * Slug: jr26-experiments/single-gatherpress_play
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-title {"level":1} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph -->
<p><?php esc_html_e('Premiere', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->

<!-- wp:gatherpress/event-date {"displayType":"start","showTimezone":"no"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Themen:', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"gatherpress_topic","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Eine Produktion von:', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"_gatherpress_group","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><!-- wp:group {"tagName":"nav","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"ariaLabel":"Post navigation"} -->
<nav aria-label="Post navigation" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-navigation-link {"type":"previous","label":"<?php esc_attr_e('Letzte Produktion', 'jr26-experiments');?>","arrow":"chevron","fontSize":"small"} /-->

<!-- wp:post-navigation-link {"label":"<?php esc_attr_e('Nächste Produktion', 'jr26-experiments');?>","arrow":"chevron","fontSize":"small"} /--></nav>
<!-- /wp:group -->

<!-- wp:gatherpress/cast-crew-list {"showDepartmentHeadings":false,"columns":4,"className":"is-style-cards"} /-->

<!-- wp:template-part {"slug":"produktions-statistiken"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"auto","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:query {"queryId":13,"query":{"perPage":5,"pages":0,"offset":0,"postType":"gatherpress_event","gatherpress_event_query":"upcoming","include_unfinished":1,"order":"asc","orderBy":"datetime","inherit":false,"shadow_filter":1,"gatherpress_shadow_source_post_id":"jr26-experiments//single-gatherpress_play","gatherpress_shadow_source_post_type":"gatherpress_play","excludeCurrent":null},"namespace":"gatherpress-event-query","enhancedPagination":true,"metadata":{"name":"Upcoming Events"},"className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query"><!-- wp:post-template {"metadata":{"name":"Events Template"}} -->
<!-- wp:gatherpress/event-date {"isLink":true,"showTimezone":"no"} /-->

<!-- wp:gatherpress/venue {"patternPicked":true} -->
<!-- wp:group {"className":"gatherpress\u002d\u002dhas-venue-address","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group gatherpress--has-venue-address" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:icon {"icon":"core/map-marker","style":{"dimensions":{"width":"24px"}}} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue address…","fieldType":"address"} /--></div>
<!-- /wp:group -->
<!-- /wp:gatherpress/venue -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"gatherpress-query-pagination"} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e('Previous Events', 'jr26-experiments');?>","className":"gatherpress-query-pagination-previous"} /-->

<!-- wp:query-pagination-numbers {"className":"gatherpress-query-pagination-numbers"} /-->

<!-- wp:query-pagination-next {"label":"<?php esc_attr_e('Next Events', 'jr26-experiments');?>","className":"gatherpress-query-pagination-next"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"className":"gatherpress-query-no-results"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no events."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:comments {"metadata":{"patternName":"jr26-experiments/comments","name":"Comments","description":"Comments area with comments list, pagination, and comment form.","categories":["text"]},"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e('Comments', 'jr26-experiments');?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":3,"fontSize":"large"} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":50} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:comment-date /-->

<!-- wp:comment-author-name /-->

<!-- wp:comment-content /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-edit-link /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->