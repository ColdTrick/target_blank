<?php

namespace ColdTrick\TargetBlank;

use Elgg\DefaultPluginBootstrap;

/**
 * Bootstraps the plugin
 */
class Bootstrap extends DefaultPluginBootstrap {

	/**
	 * {@inheritDoc}
	 */
	public function init() {
		elgg_require_js('target_blank/target_blank');
	}
}
