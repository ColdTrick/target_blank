<?php

namespace ColdTrick\TargetBlank;

class HTMLawed {
	
	/**
	 * Adds target as a denied attribute to HTMLawed config
	 *
	 * @param \Elgg\Hook $hook 'config', 'htmlawed'
	 *
	 * @return void|array
	 */
	public static function denyTargetAttribute(\Elgg\Hook $hook) {
		if (elgg_get_config('testing_mode')) {
			return;
		}
		
		$return_value = $hook->getValue();
		$deny_attribute = elgg_extract('deny_attribute', $return_value, '');
		$deny_attribute = explode(',', $deny_attribute);
		
		$deny_attribute[] = 'target';
		
		$return_value['deny_attribute'] = implode(',', $deny_attribute);
		
		return $return_value;
	}
}
