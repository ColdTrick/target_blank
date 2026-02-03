/**
 * JS to open links in a new window.
 */
import 'jquery';
import 'elgg';

let site_url = elgg.get_site_url().substring(4);
if (site_url.substring(0, 1) === 's') {
	site_url = site_url.substring(1);
}

let selector = 'a[href^="http://"]:not([target], [href^="http' + site_url + '"], [href^="https' + site_url + '"]),';
selector += 'a[href^="https://"]:not([target], [href^="http' + site_url + '"], [href^="https' + site_url + '"]),';
selector += 'a[data-target-blank-suffix]';

let suffix = null;
if (elgg.data.target_blank !== undefined && elgg.data.target_blank.link_suffix !== undefined) {
	suffix = elgg.data.target_blank.link_suffix;
}

function init() {
	$(selector).each(function() {
		const $link = $(this);
		if ($link.hasClass('target-blank')) {
			return;
		}
		
		$link.attr('target', '_blank');
		$link.addClass('target-blank');
		
		if (suffix) {
			if ($link.find(' > img, > .elgg-anchor-label > img').length) {
				// there is an image in the link
				return;
			}
			
			if (!$link.html().length) {
				// there is no content in the anchor
				return;
			}
			
			$link.append('<span class="target-blank-suffix">' + suffix + '</span>');
		}
	});
}

init();

$(document).on('ajaxComplete', init);
