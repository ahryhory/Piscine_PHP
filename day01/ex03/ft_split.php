#!/usr/bin/php
<?php
function	ft_split($str) {
	if ($str) {
		$str = explode(" ", $str);
		sort($str);
		while ($str && $str[0] == "") {
			array_shift($str);
		}
	}
	return ($str);
}
?>
