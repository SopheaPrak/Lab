<?php
	$str = "KILL JOHN";
	$gap = 4;
	$result = "";

	for ($i = 0; $i < strlen($str); $i++) {
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$ran = substr(str_shuffle($chars), 0, $gap-1);
		$result = implode($ran, str_split($str));
	}
	echo $result;
?>