<?php
/**
 * Open external links in a new window.
 */

/**
 * Inits the plugin
 *
 * @return void
 */
function target_blank_init() {
	elgg_require_js('target_blank/target_blank');
	
	elgg_register_plugin_hook_handler('elgg.data', 'page', function (\Elgg\Hook $hook) {
		$result = $hook->getValue();
		$result['target_blank']['link_suffix'] = elgg_get_plugin_setting('link_suffix', 'target_blank');
		
		return $result;
	});

	elgg_register_plugin_hook_handler('setting', 'plugin', function (\Elgg\Hook $hook) {
		if ($hook->getParam('plugin_id') !== 'target_blank') {
			return;
		}
		
		if ($hook->getParam('name') !== 'link_suffix') {
			return;
		}
		
		$params = (array) get_input('params', [], false);
		return elgg_extract('link_suffix', $params);
	});
}

elgg_register_event_handler('init', 'system', 'target_blank_init');
