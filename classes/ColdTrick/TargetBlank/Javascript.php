<?php

namespace ColdTrick\TargetBlank;

/**
 * Handles Javascript related callbacks
 */
class Javascript {

	/**
	 * Add the link suffix to the global JS data
	 *
	 * @param \Elgg\Event $event 'elgg.data', 'site'
	 *
	 * @return array
	 */
	public static function setLinkSuffix(\Elgg\Event $event): array {
		$result = $event->getValue();
		
		$result['target_blank']['link_suffix'] = elgg_get_plugin_setting('link_suffix', 'target_blank');
		
		return $result;
	}
}
