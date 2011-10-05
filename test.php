<?php 

	require_once(dirname(dirname(dirname(__FILE__))) . '/engine/start.php');
	
	admin_gatekeeper();
	
	$body .= "<a href='http://www.google.nl'>1</a><br/>";
	$body .= "<a href='http://www.google.nl' style='display: none;'>1</a><br/>";
	$body .= "<a href='https://www.google.nl'>1</a><br/>";
	$body .= "<a href='http://www.google.nl' target='_self'>1</a><br/>";
	$body .= "<a href='/pg/news'>1</a><br/>";
	$body .= "<a href='#'>1</a><br/>";
	$body .= "<a href='javascript:void(0);'>1</a><br/>";
	


	page_draw("", $body);
?>