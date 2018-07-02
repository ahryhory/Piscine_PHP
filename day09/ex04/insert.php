<?php
if (isset($_GET["todo"])) {
	$data = $_GET["todo"];
	file_put_contents("list.csv", $data.PHP_EOL, FILE_APPEND | LOCK_EX);
}
?>