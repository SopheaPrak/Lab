<?php
	$arr = range('A', 'Z');
	$str = "Hello world, I am CS.";
	$shift = 3;
	$result = " ";
	$str = strtoupper($str);

	for ($i = 0; $i < strlen($str); $i++) {
		if (in_array($str[$i], $arr)) {
			$index = array_search($str[$i], $arr);
			$key = ($index + $shift) % 26;
			$result .= $arr[$key];
		}
		else {
			$result .= $str[$i];
		}
	}
	echo $result;
?>