<?php
	$a = array(
        '0' => array('a', 'b', 'c'),
        '1' => array('d', 'e', 'f'),
        '2' => array('g', 'h', 'i')
    );
    $b = array(
        '0' => array('j', 'k', 'l'),
        '1' => array('m', 'n', 'p'),
        '2' => array('x', 'y', 'z')
    );
    $result = array();

    for($i = 0; $i <= 2; $i++) {
        for( $j=0 ; $j <= 2; $j++) {
            $result[$i][$j] = (int)$a[$i][$j] + (int)$b[$i][$j];
        }
    }

    print_r($result);
?>