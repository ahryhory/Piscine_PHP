#!/usr/bin/php
<?php
function	save_img($url, $save_to) {
	$filename = basename($url);
	$complete_save_loc = $save_to . $filename;
	file_put_contents($complete_save_loc, file_get_contents($url));
}
function	make_dir($arg) {
	$rev_dir = strrev($arg);
	preg_match("/.*?(?=\/)/", $rev_dir, $dir);
	$dir = strrev($dir[0]);
	if (!is_dir($dir)) {
		mkdir ($dir, 0777, true);
	}
	return ($dir);
}

if (!$argv[1]) {
	exit(1);
}
$init = curl_init();
curl_setopt($init, CURLOPT_URL, $argv[1]);
curl_setopt($init, CURLOPT_HEADER, 0);
curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
$file = curl_exec($init);
curl_close($init);
preg_match_all("/<img.*?>/si", $file, $imgs, PREG_PATTERN_ORDER);
$dir = make_dir($argv[1]);
$save_to = "./" . $dir . "/";
foreach ($imgs[0] as $img) {
	preg_match_all("/(?<=src=\")https?:\/\/.*\..*?(?=\")/si", $img, $url_img);
	$urls = $url_img[0];
	foreach ($urls as $url) {
		save_img($url, $save_to);
	}
}
?>
