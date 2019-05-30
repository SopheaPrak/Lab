<?php
	$a = array(
        array('a', 'b', 'c'),
        array('d', 'e', 'f'),
        array('g', 'h', 'i')
    );
    $b = array(
        array('j', 'k', 'l'),
        array('m', 'n', 'p'),
        array('x', 'y', 'z')
    );
    $result = array();

    for($i = 0; $i <= 2; $i++) {
        for( $j=0 ; $j <= 2; $j++) {
            $result[$i][$j] = $a[$i][$j]. "+". $b[$i][$j];
        }
    }

    print_r($result);
?>