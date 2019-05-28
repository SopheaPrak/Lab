<?php
	$array = array(4, 12, 31, 23, 7, 54, 13, 8, 13);
	$odd = array();
	$even = array();
    $j = $k = 0;
    $n = count($array);

    for ($i = 0; $i < $n; $i++) {
        if ($array[$i] % 2 == 0) {
            $even[$j] = $array[$i];
            $j++;
        }
        else {
            $odd[$k] = $array[$i];
            $k++;
        }
    }

    print_r($even);
    echo "<br/>"; 
    print_r($odd);
?>