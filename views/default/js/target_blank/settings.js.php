<?php
/**
 * Provides plugins settings as an AMD module
 */

$settings = ['link_suffix' => elgg_get_plugin_setting('link_suffix', 'target_blank')];
?>

define(<?php echo json_encode($settings); ?>);
