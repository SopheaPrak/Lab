<?php
    $t;
    $b = 2;
    $a = 3;
    $c = 4;
    $x;
    $y;

    $t=(pow($b,2))-(4*$a*$c);

    if ($t <= 0) {
        $t = (-1) * $t;
    }

    $x = (-2 * $c) / ($b + (sqrt($t)));
    $y = (-2 * $c) / ($b - (sqrt($t)));

    echo "x = ", $x;
    echo "<br/>";
    echo "y = ", $y;
?>