/**
 * JS to open links in a new window.
 */
define(function(require) {
	var elgg = require('elgg');
	var $ = require('jquery');
	var settings = require('target_blank/settings');

	var selector = 'a[href^="http://"]:not([target], [href^="' + elgg.get_site_url() + '"]),'
				   + 'a[href^="https://"]:not([target], [href^="' + elgg.get_site_url() + '"])';

	$(document).on('click', selector, function () {
		$(this).attr("target", "_blank");
	}).addClass("target-blank");

	var suffix = settings.link_suffix;

	if (suffix) {
		$(selector).each(function() {
			if (!$(this).find(" > img").length) {
				$(this).append(suffix);
			}
		});
	}
});
