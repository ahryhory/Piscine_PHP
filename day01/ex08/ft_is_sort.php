#!/usr/bin/php
<?php
function	ft_is_sort($arr) {
	$tmp = $arr;
	$tmp_r = $arr;
	sort($tmp);
	rsort($tmp_r);
	if ($tmp === $arr || $tmp_r === $arr) {
		return (1);
	}
	else {
		return (0);
	}
}
?>
