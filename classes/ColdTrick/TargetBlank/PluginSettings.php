<?php

namespace ColdTrick\TargetBlank;

/**
 * Handles plugin settings
 */
class PluginSettings {

	/**
	 * Save the unfiltered input of the link suffix input
	 *
	 * @param \Elgg\Event $event 'setting', 'plugin'
	 *
	 * @return void|string
	 */
	public static function saveLinkSuffix(\Elgg\Event $event) {
		if ($event->getParam('plugin_id') !== 'target_blank') {
			return;
		}
		
		if ($event->getParam('name') !== 'link_suffix') {
			return;
		}
		
		// get unfiltered input
		$params = (array) get_input('params', [], false);
		
		return elgg_extract('link_suffix', $params);
	}
}
