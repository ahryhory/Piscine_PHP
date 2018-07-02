<?php
if ($_SERVER['PHP_AUTH_USER'] != "zaz" || $_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys") {
	header('WWW-Authenticate: Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>That area is accessible for members only</body></html>\n";
}
else {
	$file = '../img/42.png';
	$str = file_get_contents($file);
	$str = base64_encode($str);
	echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64," . $str . "'>\n</body></html>\n";
}
?>
