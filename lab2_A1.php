<?php
	$array = array(3, -4, 32, -7, 10, -23, 9);
	
	function getMax($array) {
		$n = count($array);
		$max = $array[0];
		for ($i = 1; $i < $n; $i++) {
			if ($max < $array[$i]) {
				$max = $array[$i];
			}
    	}
    	return $max;        
	}

	function getMin($array) {
		$n = count($array);
		$min = $array[0];
		for ($i = 1; $i < $n; $i++) {
			if ($min > $array[$i]) {
				$min = $array[$i];
			}
        }
        return $min;        
    }

    echo getMax($array), "<br/>"; 
    echo getMin($array);
?>