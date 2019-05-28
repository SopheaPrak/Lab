<?php
	$arr = range('A', 'Z');
	$str = "KHOOR ZRUOG, L DP FV.";
	$shift = -3;
	$result = " ";

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