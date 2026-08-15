<?php
/**
 * Title: single-gatherpress_group
 * Slug: jr26-experiments/single-gatherpress_group
 * Inserter: no
 */
?>
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"8rem"} -->
<div class="wp-block-column" style="flex-basis:8rem"><!-- wp:template-part {"slug":"vertical-header"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"90%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:90%"><!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"style":{"layout":{"selfStretch":"fixed","flexSize":"70vw"}},"fontSize":"xx-large"} /-->

<!-- wp:post-date {"textAlign":"right","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:75%"><!-- wp:gatherpress/cast-crew-list {"showDepartmentHeadings":false,"className":"is-style-cards"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:gatherpress/venue {"sourcePostType":"gatherpress_group"} -->
<!-- wp:query {"queryId":15,"query":{"perPage":5,"pages":0,"offset":0,"postType":"gatherpress_event","gatherpress_event_query":"upcoming","include_unfinished":1,"order":"asc","orderBy":"datetime","inherit":false,"shadow_filter":1,"gatherpress_shadow_source_post_id":"jr26-experiments//single-gatherpress_group","gatherpress_shadow_source_post_type":"gatherpress_group"},"namespace":"gatherpress-event-query","metadata":{"name":"Upcoming Events"},"className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query"><!-- wp:post-template {"metadata":{"name":"Events Template"}} -->
<!-- wp:gatherpress/event-date {"isLink":true} /-->

<!-- wp:post-title {"isLink":true} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
<!-- /wp:gatherpress/venue --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:75%"><!-- wp:post-content {"layout":{"type":"default"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":12,"query":{"perPage":5,"pages":0,"offset":0,"postType":"gatherpress_play","gatherpress_event_query":"upcoming","include_unfinished":1,"order":"asc","orderBy":"datetime","inherit":false,"sticky":"","parents":[],"format":[],"shadow_filter":1,"gatherpress_shadow_source_post_id":"jr26-experiments//single-gatherpress_group","gatherpress_shadow_source_post_type":"gatherpress_group"},"namespace":"gatherpress-event-query","metadata":{"name":"Upcoming Produktionen"},"className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query"><!-- wp:post-template {"metadata":{"name":"Events Template"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"accent-1","textColor":"contrast"} -->
<!-- wp:post-title /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":12,"query":{"perPage":5,"pages":0,"offset":0,"postType":"gatherpress_play","gatherpress_event_query":"past","include_unfinished":0,"order":"desc","orderBy":"datetime","inherit":false,"sticky":"","parents":[],"format":[],"shadow_filter":1,"gatherpress_shadow_source_post_id":"jr26-experiments//single-gatherpress_group","gatherpress_shadow_source_post_type":"gatherpress_group"},"namespace":"gatherpress-event-query","enhancedPagination":true,"metadata":{"name":"Past Produktionen"},"className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query"><!-- wp:post-template {"metadata":{"name":"Events Template"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:media-text {"mediaType":"image","verticalAlignment":"center","imageFill":false,"useFeaturedImage":true} -->
<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /--></div></div>
<!-- /wp:media-text -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"gatherpress-query-pagination"} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e('Ältere Produktionen', 'jr26-experiments');?>","className":"gatherpress-query-pagination-previous"} /-->

<!-- wp:query-pagination-numbers {"className":"gatherpress-query-pagination-numbers"} /-->

<!-- wp:query-pagination-next {"label":"<?php esc_attr_e('Neuere Produktionen', 'jr26-experiments');?>","className":"gatherpress-query-pagination-next"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"className":"gatherpress-query-no-results"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no events."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"tagName":"nav","align":"full","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"ariaLabel":"Post navigation"} -->
<nav class="wp-block-group alignfull" aria-label="Post navigation" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--></nav>
<!-- /wp:group --></main>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"footer"} /-->