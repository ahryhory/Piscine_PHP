#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Kiev");
$fd = fopen("/var/run/utmpx", 'r');
while ($str = fread($fd, 628)) {
	$elem = unpack("a256user/a4id/a32line/ipid/itype/Itime", $str);
	if ($elem[type] == 7) {
		print "$elem[user] $elem[line]  ".date('M  j H:i', $elem[time])."\n";
	}
}
fclose($fd);
?>
