<?php
	$mat = [
		['a', 'b', 'c'],
        ['d', 'e', 'f'],
        ['g', 'h', 'i'],
        ['j', 'k', 'l']
    ];
    $mattran = [];

    for ($i = 0; $i < 4; $i++) {
    	for ($j = 0; $j < 3; $j++) {
    		$mattran[$j][$i] = $mat[$i][$j];
    	}
    }

    foreach ($mattran as $val) {
    	foreach ($val as $item) {
    		echo $item, " ";
    	}
    	echo "<br/>";
    }
?>