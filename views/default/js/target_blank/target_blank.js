/**
 * JS to open links in a new window.
 */
define(function(require) {
	var elgg = require('elgg');
	var $ = require('jquery');

	var selector = 'a[href^="http://"]:not([target], [href^="' + elgg.get_site_url() + '"]),'
				   + 'a[href^="https://"]:not([target], [href^="' + elgg.get_site_url() + '"])';

	$(document).on('click', selector, function () {
		$(this).attr("target", "_blank");
	}).addClass("target-blank");

	var suffix = elgg.data.target_blank.link_suffix;

	if (suffix) {
		$(selector).each(function() {
			if ($(this).find(" > img").length) {
				// there is an image in the link
				return;
			}
			
			if (!$(this).html().length) {
				// there is no content in the anchor
				return;
			}
			
			$(this).append(suffix);
		});
	}
});
