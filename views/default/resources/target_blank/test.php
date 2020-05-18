<?php

$body = "<a href='http://www.google.nl'>Google.nl</a><br/>";
$body .= "<a href='http://www.google.nl' style='display: none;'>Google.nl (display: none)</a><br/>";
$body .= "<a href='https://www.google.nl'>Google.nl (HTTPS)</a><br/>";
$body .= "<a href='http://www.google.nl' target='_self'>Google.nl (target=_self)</a><br/>";
$body .= "<a href='/news'>/news</a><br/>";
$body .= "<a href='#'>#</a><br/>";
$body .= "<a href='javascript:void(0);'>javascript:void(0);</a><br/>";

$stripped_url = ltrim(substr(elgg_get_site_url(), 4), 's');

$body .= "<a href='http" . $stripped_url . "'>Site url (HTTP)</a><br/>";
$body .= "<a href='https" . $stripped_url . "'>Site url (HTTPS)</a><br/>";

$body .= elgg_view('output/url', [
	'text' => 'demo link as button',
	'class' => 'elgg-button elgg-button-action',
	'href' => 'http://google.nl',
]);

echo elgg_view_page('Target blank test page', [
	'content' => $body,
]);
