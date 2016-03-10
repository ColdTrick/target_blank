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

	// this cached view uses PHP to provide settings from database to javascript
	elgg_register_simplecache_view('js/target_blank/settings.js');

	elgg_register_action('target_blank/settings/save', dirname(__FILE__) . '/actions/settings/save.php', 'admin');
	
	elgg_register_page_handler('target_blank', function() {
		echo elgg_view_resource('target_blank/test');
	});
}

elgg_register_event_handler('init', 'system', 'target_blank_init');