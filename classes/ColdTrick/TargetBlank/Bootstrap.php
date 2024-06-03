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
		elgg_import_esm('target_blank/target_blank');
	}
}
