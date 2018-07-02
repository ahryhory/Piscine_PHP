#!/usr/bin/php
<?php
if ($argc != 4) {
	echo "Incorrect Parameters\n";
}
else {
	$num1 = trim($argv[1], " \t");
	$operation = trim($argv[2], " \t");
	$num2 = trim($argv[3], " \t");

	if ($operation == "+") {
		echo $num1 + $num2;
	}
	else if ($operation == "-") {
		echo $num1 - $num2;
	}
	else if ($operation == "*") {
		echo $num1 * $num2;
	}
	else if ($operation == "/") {
		echo $num1 / $num2;
	}
	else if ($operation == "%") {
		echo $num1 % $num2;
	}
	echo "\n";
}
?>
