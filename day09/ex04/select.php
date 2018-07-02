<?php
$file = file("list.csv");
$i = count($file) - 1;
while ($i >= 0) {
	$id = explode(";", $file[$i]);
	$text = $id[1];
	$id = explode(":", $id[0]);
	$id = $id[0];
	print("<div class=\"ls\" id=\"$id\" onclick=\"deleteCookie($id)\">$text</div>");
	$i--;
}
?>