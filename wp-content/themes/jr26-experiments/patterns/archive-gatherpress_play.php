<?php
/**
 * Title: archive-gatherpress_play
 * Slug: jr26-experiments/archive-gatherpress_play
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide"><!-- wp:query {"queryId":19,"query":{"perPage":9,"pages":0,"offset":0,"postType":"gatherpress_play","order":"asc","orderBy":"datetime","inherit":false,"sticky":"","parents":[],"format":[],"include_unfinished":1,"gatherpress_event_query":"upcoming","excludeCurrent":null},"namespace":"gatherpress-event-query","metadata":{"name":"Upcoming Produktionen"},"align":"wide","className":"gatherpress-event-query"} -->
<div class="wp-block-query alignwide gatherpress-event-query"><!-- wp:post-template {"metadata":{"name":"Events Template"},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":430,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"width":"1px"}},"textColor":"base","borderColor":"base","layout":{"type":"constrained"},"twStretchedLink":true} -->
<div class="wp-block-cover has-border-color has-base-border-color has-base-color has-text-color has-link-color tw-stretched-link" style="border-width:1px;padding-right:0;padding-left:0;min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"css":"height:100%"},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-custom-css" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-default","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="is-style-default has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Premiere', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->

<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"d. F 'y","showTimezone":"no","style":{"spacing":{"margin":{"right":"0","left":"0"},"padding":{"right":"0","left":"0"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"production_status","className":"is-style-post-terms-1","neutraliseLinks":true} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"width":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"150px"}}} -->
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"gatherpress_topic","className":"is-style-post-terms-1","style":{"typography":{"textAlign":"right"},"spacing":{"margin":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":20,"query":{"perPage":30,"pages":0,"offset":0,"postType":"gatherpress_play","order":"desc","orderBy":"datetime","inherit":false,"sticky":"","parents":[],"format":[],"include_unfinished":0,"gatherpress_event_query":"past","taxQuery":{"include":{"production_status":[4]}},"excludeCurrent":null},"namespace":"gatherpress-event-query","enhancedPagination":true,"metadata":{"name":"Past Produktionen"},"align":"wide","className":"gatherpress-event-query"} -->
<div class="wp-block-query alignwide gatherpress-event-query"><!-- wp:post-template {"metadata":{"name":"Events Template"},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":430,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"width":"1px"}},"textColor":"base","borderColor":"base","layout":{"type":"constrained"},"twStretchedLink":true} -->
<div class="wp-block-cover has-border-color has-base-border-color has-base-color has-text-color has-link-color tw-stretched-link" style="border-width:1px;padding-right:0;padding-left:0;min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"css":"height:100%"},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-custom-css" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-default","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="is-style-default has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Premiere', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->

<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"d. F 'y","showTimezone":"no","style":{"spacing":{"margin":{"right":"0","left":"0"},"padding":{"right":"0","left":"0"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"width":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"150px"}}} -->
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"gatherpress_topic","className":"is-style-post-terms-1","style":{"typography":{"textAlign":"right"},"spacing":{"margin":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"center","className":"gatherpress-query-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e('Vorherige Produktionen', 'jr26-experiments');?>","className":"gatherpress-query-pagination-previous"} /-->

<!-- wp:query-pagination-numbers {"className":"gatherpress-query-pagination-numbers"} /-->

<!-- wp:query-pagination-next {"label":"<?php esc_attr_e('Nächste Produktionen', 'jr26-experiments');?>","className":"gatherpress-query-pagination-next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":21,"query":{"perPage":30,"pages":0,"offset":0,"postType":"gatherpress_play","order":"desc","orderBy":"datetime","inherit":false,"sticky":"","parents":[],"format":[],"include_unfinished":0,"gatherpress_event_query":"past","taxQuery":{"include":{"production_status":[5]}},"excludeCurrent":null},"namespace":"gatherpress-event-query","metadata":{"name":"Past Produktionen"},"align":"wide","className":"gatherpress-event-query"} -->
<div class="wp-block-query alignwide gatherpress-event-query"><!-- wp:post-template {"metadata":{"name":"Events Template"},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":430,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"width":"1px"}},"textColor":"base","borderColor":"base","layout":{"type":"constrained"},"twStretchedLink":true} -->
<div class="wp-block-cover has-border-color has-base-border-color has-base-color has-text-color has-link-color tw-stretched-link" style="border-width:1px;padding-right:0;padding-left:0;min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"css":"height:100%"},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group has-custom-css" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-default","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="is-style-default has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Premiere', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->

<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"d. F 'y","showTimezone":"no","style":{"spacing":{"margin":{"right":"0","left":"0"},"padding":{"right":"0","left":"0"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"production_status","className":"is-style-post-terms-1","neutraliseLinks":true} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"width":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"150px"}}} -->
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"gatherpress_topic","className":"is-style-post-terms-1","style":{"typography":{"textAlign":"right"},"spacing":{"margin":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"center","className":"gatherpress-query-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e('Vorherige Produktionen', 'jr26-experiments');?>","className":"gatherpress-query-pagination-previous"} /-->

<!-- wp:query-pagination-numbers {"className":"gatherpress-query-pagination-numbers"} /-->

<!-- wp:query-pagination-next {"label":"<?php esc_attr_e('Nächste Produktionen', 'jr26-experiments');?>","className":"gatherpress-query-pagination-next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->