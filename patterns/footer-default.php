<?php
/**
 * Title: Default footer
 * Slug: blockitty/footer-default
 * Categories: footer
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site footer
 *
 * @package blockitty
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
				<!-- wp:site-title {"level":0} /-->
				<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">
						<?php echo esc_html_x( 'Blockitty – A WordPress Block theme by TemplatesNext', 'demo contents', 'blockitty' ); ?>
					</p>
				<!-- /wp:paragraph -->
			</div>
		<!-- /wp:group -->
	</div>
<!-- /wp:group -->

