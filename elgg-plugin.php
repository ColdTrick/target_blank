<?php

use ColdTrick\TargetBlank\Bootstrap;
use Elgg\Router\Middleware\AdminGatekeeper;

return [
	'bootstrap' => Bootstrap::class,
	'hooks' => [
		'elgg.data' => [
			'page' => [
				'\ColdTrick\TargetBlank\Javascript::setLinkSuffix' => [],
			],
		],
		'setting' => [
			'plugin' => [
				'\ColdTrick\TargetBlank\PluginSettings::saveLinkSuffix' => [],
			],
		],
	],
	'routes' => [
		'target_blank:test' => [
			'path' => '/target_blank/test',
			'resource' => 'target_blank/test',
			'middleware' => [
				AdminGatekeeper::class,
			],
		],
	],
];
