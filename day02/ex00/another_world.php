#!/usr/bin/php
<?php
if ($argv[1]) {
	preg_match_all("/[^ \t]*/", $argv[1], $arr);
	$count = 0;
	foreach ($arr[0] as $elem) {
		if ($elem) {
			if ($count === 1) {
				echo " ";
			}
			$count = 1;
			echo $elem;
		}
	}
	echo "\n";
}
?>
