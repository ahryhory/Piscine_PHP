#!/usr/bin/php
<?php
function	check_day($str) {
	$str[0] = strtolower($str[0]);
	if ($str == "lundi" || $str == "mardi" || $str == "mercredi" || $str == "jeudi" ||
		$str == "vendredi" || $str == "samedi" || $str == "dimanche") {
		return (1);
	}
	else {
		return (0);
	}
}
function	check_day_number($str) {
	if ($str >= 1 && $str <= 31) {
		return (1);
	}
	else {
		return (0);
	}
}
function	check_month($str) {
	$str[0] = strtolower($str[0]);
	if ($str == "janvier" || $str == "février" || $str == "fevrier" || $str == "mars" ||
		$str == "avril" || $str == "mai" || $str == "juin" || $str == "juillet" ||
		$str == "août" || $str == "aout" || $str == "septembre" || $str == "octobre" ||
		$str == "novembre" || $str == "décembre" || $str == "decembre") {
		return (1);
	}
	else {
		return (0);
	}
}
function	get_month($str) {
	$str[0] = strtolower($str[0]);
	if ($str == "janvier") {
		return (1);
	}
	else if ($str == "février" || $str == "fevrier") {
		return (2);
	}
	else if ($str == "mars") {
		return (3);
	}
	else if ($str == "avril") {
		return (4);
	}
	else if ($str == "mai") {
		return (5);
	}
	else if ($str == "juin") {
		return (6);
	}
	else if ($str == "juillet") {
		return (7);
	}
	else if ($str == "août" || $str == "aout") {
		return (8);
	}
	else if ($str == "septembre") {
		return (9);
	}
	else if ($str == "octobre") {
		return (10);
	}
	else if ($str == "novembre") {
		return (11);
	}
	else if ($str == "décembre" || $str == "decembre") {
		return (12);
	}
	else {
		return (0);
	}
}
function	check_year($str) {
	if ($str >= 1970 && $str <= 9999) {
		return (1);
	}
	else {
		return (0);
	}
}
function	check_time($str) {
	$count_colon = preg_match_all("/:/", $str);
	if ($count_colon != 2) {
		return (0);
	}
	else {
		$time = explode(":", $str);
		if (!$time[0][1] || !$time[1][1] ||
			!$time[2][1]) {
			return (0);
		}
		if ($time[0] >= 0 && $time[0] <= 23 &&
			$time[1] >= 0 && $time[1] <= 59 &&
			$time[2] >= 0 && $time[2] <= 59) {
			return (1);
		}
		else {
			return (0);
		}
	}
}

if ($argc > 1) {
	$count_space = preg_match_all("/ /", $argv[1]);
	if ($count_space != 4) {
		echo "Wrong Format\n";
	}
	else {
		$str = explode(" ", $argv[1]);
		if (check_day($str[0]) && check_day_number($str[1]) &&
			check_month($str[2]) && check_year($str[3]) && check_time($str[4])) {
			$month = get_month($str[2]);
			date_default_timezone_set("Europe/Paris");
			$time = strtotime($str[3] . "-" . $month . "-" . $str[1] . " " . $str[4]);
			echo $time . "\n";
		}
		else {
			echo "Wrong Format\n";
		}
	}
}
?>
