<?php
/**
 * Title: single-gatherpress_event
 * Slug: jr26-experiments/single-gatherpress_event
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"grid"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"layout":{"columnSpan":2,"rowSpan":1}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"d.","showTimezone":"no","fontSize":"xx-large"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"F","showTimezone":"no"} /-->

<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"Y","showTimezone":"no"} /--></div>
<!-- /wp:group -->

<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"l, G:i \u005cU\u005ch\u005cr","showTimezone":"no"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"style":{"layout":{"columnSpan":2,"rowSpan":1}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Eine Produktion von:', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"_gatherpress_group","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Themen:', 'jr26-experiments');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"gatherpress_topic","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-featured-image {"aspectRatio":"auto","align":"wide"} /-->

<!-- wp:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:gatherpress/venue {"patternPicked":true} -->
<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:group {"className":"gatherpress\u002d\u002dhas-venue-address","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group gatherpress--has-venue-address" style="margin-top:0;margin-bottom:0"><!-- wp:icon {"icon":"core/map-marker","style":{"dimensions":{"width":"24px"}}} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue address…","fieldType":"address"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"gatherpress\u002d\u002dhas-venue-phone","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group gatherpress--has-venue-phone"><!-- wp:icon {"icon":"core/mobile","style":{"dimensions":{"width":"24px"}}} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue phone…","fieldType":"phone"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gatherpress\u002d\u002dhas-venue-website","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group gatherpress--has-venue-website"><!-- wp:icon {"icon":"core/external","style":{"dimensions":{"width":"24px"}}} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue website URL…","fieldType":"url"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:gatherpress/venue-map /-->
<!-- /wp:gatherpress/venue -->

<!-- wp:gatherpress/online-event -->
<div class="wp-block-gatherpress-online-event"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:icon {"icon":"core/capture-video","style":{"dimensions":{"width":"24px"}}} /-->

<!-- wp:gatherpress/online-event-link {"linkText":"\u003cspan class=\u0022gatherpress-tooltip\u0022 data-gatherpress-tooltip=\u0022Link available for attendees only.\u0022\u003eOnline event\u003c/span\u003e"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:gatherpress/online-event -->

<!-- wp:gatherpress/cast-crew-list {"showDepartmentHeadings":false,"columns":4,"className":"is-style-simple-list"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"><!-- wp:group {"tagName":"nav","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"ariaLabel":"Post navigation"} -->
<nav aria-label="Post navigation" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-navigation-link {"type":"previous","label":"<?php esc_attr_e('Letzte Veranstaltung', 'jr26-experiments');?>","arrow":"chevron","fontSize":"small"} /-->

<!-- wp:post-navigation-link {"label":"<?php esc_attr_e('Nächste Veranstaltung', 'jr26-experiments');?>","arrow":"chevron","fontSize":"small"} /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->