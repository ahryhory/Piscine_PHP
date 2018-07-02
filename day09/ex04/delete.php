<?php
if (isset($_GET["name"])) {
	$name = $_GET["name"];
	$file = file_get_contents("list.csv");
	$file = preg_replace("/" . $name . ".+\n/", "", $file);
	file_put_contents("list.csv", $file);
}
?>