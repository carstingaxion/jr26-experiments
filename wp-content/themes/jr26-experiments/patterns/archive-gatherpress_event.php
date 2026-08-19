<?php
/**
 * Title: archive-gatherpress_event
 * Slug: jr26-experiments/archive-gatherpress_event
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"gatherpress_event","order":"asc","orderBy":"datetime","inherit":false,"include_unfinished":0},"namespace":"gatherpress-event-query","metadata":{"name":"Upcoming Events"},"align":"wide","className":"gatherpress-event-query"} -->
<div class="wp-block-query alignwide gatherpress-event-query"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e('Nach Produktionen', 'jr26-experiments');?></summary><!-- wp:query-filter/taxonomy {"taxonomy":"_gatherpress_play","emptyLabel":"Alle","label":"Produktionen","showLabel":false,"displayType":"radio"} /--></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e('Nach Orten', 'jr26-experiments');?></summary><!-- wp:query-filter/taxonomy {"taxonomy":"_gatherpress_venue","label":"Venues","showLabel":false,"displayType":"radio"} /--></details>
<!-- /wp:details --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:post-template {"metadata":{"name":"Events Template"}} -->
<!-- wp:gatherpress/timed-separator {"metadata":{"name":"Timed Separator — Month"}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"_gatherpress_group","className":"is-style-post-terms-1","neutraliseLinks":true} /-->

<!-- wp:post-terms {"term":"gatherpress_topic","className":"is-style-post-terms-1","neutraliseLinks":true} /--></div>
<!-- /wp:group -->

<!-- wp:gatherpress/event-date {"displayType":"start","isLink":true,"showTimezone":"no","style":{"typography":{"textAlign":"left"}}} /-->

<!-- wp:media-text {"mediaType":"image","mediaWidth":25,"imageFill":false,"useFeaturedImage":true} -->
<div class="wp-block-media-text is-stacked-on-mobile" style="grid-template-columns:25% auto"><figure class="wp-block-media-text__media"></figure><div class="wp-block-media-text__content"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xx-large"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:gatherpress/venue {"patternPicked":true,"layout":{"type":"constrained","justifyContent":"left"}} -->
<!-- wp:group {"align":"wide","className":"gatherpress\u002d\u002dhas-venue-address","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide gatherpress--has-venue-address" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"level":3,"style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

<!-- wp:icon {"icon":"core/map-marker"} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue address…","fieldType":"address"} /--></div>
<!-- /wp:group -->
<!-- /wp:gatherpress/venue -->

<!-- wp:gatherpress/online-event -->
<div class="wp-block-gatherpress-online-event"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:icon {"icon":"core/capture-video","style":{"dimensions":{"width":"24px"}}} /-->

<!-- wp:gatherpress/online-event-link {"linkText":"\u003cspan class=\u0022gatherpress-tooltip\u0022 data-gatherpress-tooltip=\u0022Link available for attendees only.\u0022\u003eOnline event\u003c/span\u003e"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:gatherpress/online-event --></div></div>
<!-- /wp:media-text -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"gatherpress-query-pagination"} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e('Previous Events', 'jr26-experiments');?>","className":"gatherpress-query-pagination-previous"} /-->

<!-- wp:query-pagination-numbers {"className":"gatherpress-query-pagination-numbers"} /-->

<!-- wp:query-pagination-next {"label":"<?php esc_attr_e('Next Events', 'jr26-experiments');?>","className":"gatherpress-query-pagination-next"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"className":"gatherpress-query-no-results"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no events."} -->
<p><?php esc_html_e('nix weiter geplant ', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->