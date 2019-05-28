<?php
	$array = array("passerine", "hummingbird", "cormorant", "eagle", "nightingale");
    $reverseArray = array();
    $j = 0;
    $n = sizeof($array);

	for($i = $n - 1; $i >= 0; $i--){
        $reverseArray[$j] = $array[$i];
        $j++;
    }

    print_r($reverseArray);
?>