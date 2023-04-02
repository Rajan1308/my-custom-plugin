<?php
/**
 * Plugin Class.
 *
 * @package my-basics-plugin
 */

namespace MyCustomPlugin;

/**
 * Class Plugin.
 */
class Patterns {
  /**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}


  /**
	 * Initialize.
	 */
	private function init() {
		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'register_block_patterns' ] );
		add_action( 'init', [ $this, 'register_block_pattern_categories' ] );
	}

  /**
	 * Register Block Patterns.
	 */
	public function register_block_patterns() {
		if ( function_exists( 'register_block_pattern' ) ) {

			// Get the two column pattern content.
			$two_columns_content = mcp_features_get_template( 'patterns/two-columns' );

			/**
			 * Register Two Column Pattern
			 */
			register_block_pattern(
				'my-basics-plugin/two-columns',
				[
					'title'       => __( 'Custom Block Two Column', 'my-basics-plugin' ),
					'description' => __( 'Custom Block Two Column Patterns', 'my-basics-plugin' ),
					'categories'  => [ 'mcp-columns' ],
					'content'     => $two_columns_content,
				]
			);

			/**
			 * Two Columns Secondary Pattern
			 */
			$two_columns_secondary_content = mcp_features_get_template( 'patterns/two-columns-secondary' );

			register_block_pattern(
				'my-basics-plugin/two-columns-secondary',
				[
					'title'       => __( 'Custom Block Two Columns Secondary', 'my-basics-plugin' ),
					'description' => __( 'Custom Block Cover Block with image and text', 'my-basics-plugin' ),
					'categories'  => [ 'mcp-columns' ],
					'content'     => $two_columns_secondary_content,
				]
			);
		}
	}


	/**
	 * Register Block Pattern Categories.
	 */
	public function register_block_pattern_categories() {

		$pattern_categories = [
			'mcp-columns' => __( 'MCP Features Columns', 'my-basics-plugin' ),
		];

		if ( ! empty( $pattern_categories ) ) {
			foreach ( $pattern_categories as $pattern_category => $pattern_category_label ) {
				register_block_pattern_category(
					$pattern_category,
					[ 'label' => $pattern_category_label ]
				);
			}
		}
	}



}
