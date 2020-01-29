<?php

namespace ColdTrick\TargetBlank;

class PluginSettings {

	/**
	 * Save the unfilterd input of the link suffix input
	 *
	 * @param \Elgg\Hook $hook 'setting', 'plugin'
	 *
	 * @return void|string
	 */
	public static function saveLinkSuffix(\Elgg\Hook $hook) {
		if ($hook->getParam('plugin_id') !== 'target_blank') {
			return;
		}
		
		if ($hook->getParam('name') !== 'link_suffix') {
			return;
		}
		
		// get unfiltered input
		$params = (array) get_input('params', [], false);
		
		return elgg_extract('link_suffix', $params);
	}
}
