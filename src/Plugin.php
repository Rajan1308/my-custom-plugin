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
class Plugin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initialize plugin
	 */
	private function init() {
		define( 'MyCustomPlugin_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __DIR__ ) ) );
		define( 'MyCustomPlugin_PLUGIN_URL', untrailingslashit( plugin_dir_url( __DIR__ ) ) );
		define( 'MyCustomPlugin_PLUGIN_BUILD_PATH', MyCustomPlugin_PLUGIN_PATH . '/assets/build' );
		define( 'MyCustomPlugin_PLUGIN_BUILD_URL', MyCustomPlugin_PLUGIN_URL . '/assets/build' );
		define( 'MyCustomPlugin_PLUGIN_VERSION', '1.0.0' );

		new Assets();
	}
}
