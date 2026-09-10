<?php
/**
 * Title: Events of production kiosk
 * Slug: jr26-experiments/kiosk-production-events
 * Categories: hero, banner
 * Description: Kiosk with events of the current production
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since jr26-experiments 1.0
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:gatherpress/venue {"sourcePostType":"gatherpress_play"} -->
<!-- wp:rt-carousel/carousel {"loop":true,"autoplay":true} -->
<div class="wp-block-rt-carousel-carousel rt-carousel" role="region" aria-roledescription="carousel" aria-label="Carousel" dir="ltr" data-axis="x" data-loop="true" data-wp-interactive="rt-carousel/carousel" data-wp-context="{&quot;transition&quot;:&quot;slide&quot;,&quot;options&quot;:{&quot;loop&quot;:true,&quot;dragFree&quot;:false,&quot;align&quot;:&quot;start&quot;,&quot;containScroll&quot;:&quot;trimSnaps&quot;,&quot;direction&quot;:&quot;ltr&quot;,&quot;axis&quot;:&quot;x&quot;,&quot;slidesToScroll&quot;:1},&quot;autoplay&quot;:{&quot;delay&quot;:4000,&quot;stopOnInteraction&quot;:true,&quot;stopOnMouseEnter&quot;:false},&quot;isPlaying&quot;:true,&quot;timerIterationId&quot;:0,&quot;selectedIndex&quot;:-1,&quot;scrollSnaps&quot;:[],&quot;canScrollPrev&quot;:false,&quot;canScrollNext&quot;:false,&quot;scrollProgress&quot;:0,&quot;slideCount&quot;:0,&quot;ariaLabelPattern&quot;:&quot;Go to slide %d&quot;,&quot;countLabelPattern&quot;:&quot;Slide {{currentSlide}} of {{totalSlides}}&quot;,&quot;announcement&quot;:&quot;&quot;,&quot;shouldAnnounce&quot;:false,&quot;announcementPattern&quot;:&quot;Slide {{currentSlide}} of {{totalSlides}}&quot;,&quot;autoScroll&quot;:false,&quot;useTabs&quot;:false,&quot;carouselId&quot;:&quot;&quot;}" data-wp-init="callbacks.initCarousel" style="--rt-carousel-gap:0px"><!-- wp:rt-carousel/carousel-viewport -->
<div class="wp-block-rt-carousel-carousel-viewport embla"><div class="embla__container"><!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"gatherpress_event","gatherpress_event_query":"upcoming","include_unfinished":1,"order":"asc","orderBy":"datetime","inherit":false,"excludeCurrent":null,"shadow_filter":1,"gatherpress_shadow_source_post_id":82,"gatherpress_shadow_source_post_type":"gatherpress_play"},"namespace":"gatherpress-event-query","metadata":{"name":"Upcoming Events"},"className":"gatherpress-event-query"} -->
<div class="wp-block-query gatherpress-event-query"><!-- wp:post-template {"metadata":{"name":"Events Template"}} -->
<!-- wp:gatherpress/event-date {"displayType":"start"} /-->

<!-- wp:post-title /-->

<!-- wp:gatherpress/venue {"patternPicked":true} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-title {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:group {"className":"gatherpress\u002d\u002dhas-venue-address","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group gatherpress--has-venue-address" style="margin-top:0;margin-bottom:0"><!-- wp:icon {"icon":"core/map-marker","style":{"dimensions":{"width":"24px"}}} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue address…","fieldType":"address","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:gatherpress/venue -->
<!-- /wp:post-template -->

<!-- wp:query-no-results {"className":"gatherpress-query-no-results"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no events."} -->
<p>Nix geplant :(</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div></div>
<!-- /wp:rt-carousel/carousel-viewport -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:rt-carousel/carousel-controls -->
<div class="wp-block-rt-carousel-carousel-controls rt-carousel-controls"><button type="button" class="rt-carousel-controls__btn rt-carousel-controls__btn--prev" data-wp-on--click="actions.scrollPrev" data-wp-bind--disabled="!state.canScrollPrev" aria-label="Previous Slide"><svg class="rt-carousel-controls__icon" width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 3.55371L3.55371 7.10742V4.26562H12.7861V2.84375H3.55371V0L0 3.55371Z" fill="#1C1C1C"></path></svg></button><button type="button" class="rt-carousel-controls__btn rt-carousel-controls__btn--next" data-wp-on--click="actions.scrollNext" data-wp-bind--disabled="!state.canScrollNext" aria-label="Next Slide"><svg class="rt-carousel-controls__icon" width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.7861 3.55371L9.23242 7.10742V4.26562H0V2.84375H9.23242V0L12.7861 3.55371Z" fill="#1C1C1C"></path></svg></button></div>
<!-- /wp:rt-carousel/carousel-controls -->

<!-- wp:rt-carousel/carousel-counter -->
<div class="wp-block-rt-carousel-carousel-counter rt-carousel-counter" role="group" aria-label="Carousel counter" data-wp-interactive="rt-carousel/carousel" data-wp-bind--aria-label="callbacks.getCountLabel"><span class="rt-carousel-counter__current" data-wp-text="callbacks.getCurrentCount"></span><span class="rt-carousel-counter__separator" aria-hidden="true">/</span><span class="rt-carousel-counter__total" data-wp-text="callbacks.getTotalCount"></span></div>
<!-- /wp:rt-carousel/carousel-counter -->

<!-- wp:rt-carousel/carousel-dots -->
<div class="wp-block-rt-carousel-carousel-dots rt-carousel-dots"><template data-wp-each--snap="context.scrollSnaps"><button class="rt-carousel-dot" data-wp-class--is-active="callbacks.isDotActive" data-wp-bind--aria-current="callbacks.isDotActive" data-wp-on--click="actions.onDotClick" data-wp-bind--aria-label="callbacks.getDotLabel" type="button"></button></template></div>
<!-- /wp:rt-carousel/carousel-dots --></div>
<!-- /wp:group --><span class="screen-reader-text" role="status" aria-live="polite" aria-atomic="true" data-wp-text="context.announcement"></span></div>
<!-- /wp:rt-carousel/carousel -->
<!-- /wp:gatherpress/venue --></div>
<!-- /wp:group -->
