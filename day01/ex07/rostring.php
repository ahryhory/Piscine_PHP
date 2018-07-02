#!/usr/bin/php
<?php
function	ft_split($str) {
	if ($str) {
		$str = explode(" ", $str);
	}
	return ($str);
}

if ($argc > 1) {
	$arr = ft_split($argv[1]);
	$i = 0;
	$end = count($arr);
	while ($i < $end) {
		if ($arr[$i]) {
			$word = $arr[$i];
			$i++;
			break ;
		}
		$i++;
	}
	while ($i < $end) {
		if ($arr[$i]) {
			echo $arr[$i] . " ";
		}
		$i++;
	}
	if ($word) {
		echo $word . "\n";
	}
}
?>
