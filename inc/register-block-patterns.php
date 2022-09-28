<?php
/**
 * Blockitty: Block Patterns
 *
 * @since Blockitty 1.0.1
 */

 /**
 * Registers block patterns and categories.
 */
function blockitty_register_block_patterns() {
    /**/
	$block_pattern_categories = array(
		'featured' => array( 'label' => __( 'Featured', 'blockitty' ) ),
		'footer'   => array( 'label' => __( 'Footers', 'blockitty' ) ),
		'header'   => array( 'label' => __( 'Headers', 'blockitty' ) ),
		'query'    => array( 'label' => __( 'Query', 'blockitty' ) ),
		'pages'    => array( 'label' => __( 'Pages', 'blockitty' ) ),
	);
    
	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'blockitty_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'blockitty_register_block_patterns', 9 );
