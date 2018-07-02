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

function	ft_srt($a, $b) {
	$a = strtolower($a);
	$b = strtolower($b);

	$i = 0;
	$j = 0;
	while ($a[$i] && $b[$j]) {
		if ($a[$i] >= 'a' && $a[$i] <= 'z' &&
			$b[$j] >= 'a' && $b[$j] <= 'z') {
			if ($a[$i] > $b[$j]) {
				return (1);
			}
			else if ($a[$i] < $b[$j]){
				return (-1);
			}
		}
		else if ($a[$i] >= '0' && $a[$i] <= '9' &&
			$b[$j] >= '0' && $b[$j] <= '9') {
			if ($a[$i] > $b[$j]) {
				return (1);
			}
			else if ($a[$i] < $b[$j]){
				return (-1);
			}
		}
		else if (($a[$i] < '0' || $a[$i] > '9') &&
			($a[$i] < 'a' || $a[$i] > 'z') &&
			($b[$j] < '0' || $b[$j] > '9') &&
			($b[$j] < 'a' || $b[$j] > 'z')) {
			if ($a[$i] > $b[$j]) {
				return (1);
			}
			else if ($a[$i] < $b[$j]){
				return (-1);
			}
		}
		else if ($a[$i] >= 'a' && $a[$i] <= 'z' &&
			$b[$j] >= '0' && $b[$j] <= '9') {
			return (-1);
		}
		else if ($a[$i] >= '0' && $a[$i] <= '9' &&
			$b[$j] >= 'a' && $b[$j] <= 'z') {
			return (1);
		}
		else if ($a[$i] >= 'a' && $a[$i] <= 'z' &&
			($b[$j] < '0' || $b[$j] > '9') &&
			($b[$j] < 'a' || $b[$j] > 'z')) {
			return (-1);
		}
		else if (($a[$i] < 'a' || $a[$i] > 'z') &&
			($a[$i] < '0' || $a[$i] > '9') &&
			$b[$j] >= 'a' && $b[$j] <= 'z') {
			return (1);
		}
		else if ($a[$i] >= '0' && $a[$i] <= '9' &&
			($b[$j] < '0' || $b[$j] > '9') &&
			($b[$j] < 'a' || $b[$j] > 'z')) {
			return (-1);
		}
		else if (($a[$i] < 'a' || $a[$i] > 'z') &&
			($a[$i] < '0' || $a[$i] > '9') &&
			$b[$j] >= '0' && $b[$j] <= '9') {
			return (1);
		}
		$i++;
		$j++;
		if (!$a[$i] && $b[$j]) {
			return (-1);
		}
		if (!$b[$j] && $a[$i]) {
			return (1);
		}
	}
	if ($i == $j) {
		return (0);
	}
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
array_shift($arr);
usort($arr, "ft_srt");
$i = 0;
while ($arr[$i]) {
	echo $arr[$i] . "\n";
	$i++;
}
?>
