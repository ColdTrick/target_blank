/**
 * JS to open links in a new window.
 */
import 'jquery';
import 'elgg';

var site_url = elgg.get_site_url().substring(4);
if (site_url.substring(0, 1) === 's') {
	site_url = site_url.substring(1);
}

var selector = 'a[href^="http://"]:not([target], [href^="http' + site_url + '"], [href^="https' + site_url + '"]),';
selector += 'a[href^="https://"]:not([target], [href^="http' + site_url + '"], [href^="https' + site_url + '"]),';
selector += 'a[data-target-blank-suffix]';

$(document).on('click', selector, function () {
	$(this).attr('target', '_blank');
}).addClass('target-blank');


var suffix = null;
if (elgg.data.target_blank !== undefined && elgg.data.target_blank.link_suffix !== undefined) {
	suffix = elgg.data.target_blank.link_suffix;
}

if (suffix) {
	$(selector).each(function() {
		if ($(this).find(' > img, > .elgg-anchor-label > img').length) {
			// there is an image in the link
			return;
		}
		
		if (!$(this).html().length) {
			// there is no content in the anchor
			return;
		}
		
		$(this).append('<span class="target-blank-suffix">' + suffix + '</span>');
	});
}
