#!/usr/bin/php
<?php
echo "Enter a number: ";
while (fscanf(STDIN, "%s", $str)) {
	if (is_numeric($str)) {
		if ($str % 2 == 0) {
			echo "The number ".$str." is even\n";
		}
		else {
			echo "The number ".$str." is odd\n";
		}
	}
	else {
		echo "'".$str."'";
		echo " is not a number\n";
	}
	$str = "";
	echo "Enter a number: ";
}
echo "\n";
?>
