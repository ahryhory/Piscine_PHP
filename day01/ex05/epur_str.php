#!/usr/bin/php
<?php
$i = 0;
$j = 0;

while ($argv[1][$i] == " ") {
	$i++;
}
while ($argv[1][$j]) {
	$j++;
}
$j--;
while ($argv[1][$j] == " ") {
	$j--;
}
while ($i <= $j) {
	if ($argv[1][$i] != " ") {
		echo $argv[1][$i];
		$i++;
	}
	else {
		echo " ";
		while ($argv[1][$i] == " ") {
			$i++;
		}
	}
}
if ($argv[1]) {
	echo "\n";
}
?>
