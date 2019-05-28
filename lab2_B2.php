<?php
    $_POST['submit'] = true;
    $_POST['radius'] = 1.2;
    $_POST['height'] = 5;

    if (isset($_POST["submit"])) {
        $r = (float) $_POST['radius'];
        $h = (float) $_POST['height'];
        
        $pi = 3.14;
        $A = (2 * $pi * $r * $h) + (2 * $pi * pow($r,2));

        echo "The surface of cylinder is ", $A;
    }
?>