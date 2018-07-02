#!/usr/bin/php
<?php

function call_2 ($matches) {
	return strtoupper($matches[0]);
}

function call ($matches) {
	$matches = preg_replace_callback("/(?<=title=\").*?(?=\")/si", "call_2", $matches);
	$matches = preg_replace_callback("/(?<=>)[^<].*?[^>]?(?=<)/si", "call_2", $matches);
	return $matches[0];
}

if ($argv[1]) {
	$fl = file_get_contents($argv[1]);
	$arr = preg_replace_callback("/<a.*?<\/a>/si", "call", $fl);
	echo $arr;
}
?>
