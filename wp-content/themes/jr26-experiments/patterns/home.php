<?php
/**
 * Title: home
 * Slug: jr26-experiments/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"metadata":{"patternName":"jr26-experiments/hidden-blog-heading","name":"Hidden blog heading","description":"Hidden heading for the home page and index template."},"style":{"typography":{"textAlign":"left"}}} -->
<h1 class="wp-block-heading has-text-align-left"><?php esc_html_e('Blog', 'jr26-experiments');?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":7,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:template-part {"slug":"query-post-template-standard","area":"query-post-template"} /-->
<!-- /wp:post-template -->



<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Füge Text oder Blöcke hinzu, die angezeigt werden, wenn eine Abfrage keine Ergebnisse ausgibt."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->