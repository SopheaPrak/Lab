<?php
    function fib($n) { 
        if ($n <= 1) {
            return $n; 
        }
        return fib($n - 1) + fib($n - 2); 
    }

    $n1 = 5;
    echo "Time taken before compute: ", round(microtime(true)*1000);
    echo "<br/>";
    echo fib($n1);
    echo "<br/>";
    echo "Time taken to compute the Fibonacci numbers (n = ", $n1, "): ", round(microtime(true)*1000);
    echo "<br/>", "----------", "<br/>";

    $n2 = 10;
    echo "Time taken before compute: ", round(microtime(true)*1000);
    echo "<br/>";
    echo fib($n2);
    echo "<br/>";
    echo "Time taken to compute the Fibonacci numbers (n = ", $n2, "): ", round(microtime(true)*1000);
    echo "<br/>", "----------", "<br/>";

    $n3 = 15;
    echo "Time taken before compute: ", round(microtime(true)*1000);
    echo "<br/>";
    echo fib($n3);
    echo "<br/>";
    echo "Time taken to compute the Fibonacci numbers (n = ", $n3, "): ", round(microtime(true)*1000);
?>