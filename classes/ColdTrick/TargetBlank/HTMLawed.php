<?php

namespace ColdTrick\TargetBlank;

/**
 * HTMLawed related callbacks
 */
class HTMLawed {
	
	/**
	 * Adds target as a denied attribute to HTMLawed config
	 *
	 * @param \Elgg\Event $event 'config', 'htmlawed'
	 *
	 * @return void|array
	 */
	public static function denyTargetAttribute(\Elgg\Event $event) {
		if (elgg_get_config('testing_mode')) {
			return;
		}
		
		$return_value = $event->getValue();
		$deny_attribute = elgg_extract('deny_attribute', $return_value, '');
		$deny_attribute = explode(',', $deny_attribute);
		
		$deny_attribute[] = 'target';
		
		$return_value['deny_attribute'] = implode(',', $deny_attribute);
		
		return $return_value;
	}
}
