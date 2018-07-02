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

$i = 1;

$arr = array ("");
while ($argv[$i]) {
	$tmp = ft_split($argv[$i]);
	$j = 0;
	while ($tmp[$j]) {
		array_push($arr, $tmp[$j]);
		$j++;
	}
	$i++;
}
sort($arr);
$i = 1;
while ($arr[$i]) {
	echo $arr[$i] . "\n";
	$i++;
}
?>
