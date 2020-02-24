<?php

namespace ColdTrick\TargetBlank;

class Javascript {

	/**
	 * Add the link suffix to the global JS data
	 *
	 * @param \Elgg\Hook $hook 'elgg.data', 'page'
	 *
	 * @return array
	 */
	public static function setLinkSuffix(\Elgg\Hook $hook) {
		$result = $hook->getValue();
		
		$result['target_blank']['link_suffix'] = elgg_get_plugin_setting('link_suffix', 'target_blank');
		
		return $result;
	}
}
