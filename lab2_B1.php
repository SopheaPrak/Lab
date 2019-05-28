<?php
    if (date("H") < 12) {
        echo "Good Morning";
    }
    else if (date("H") > 11 && date("H") < 18) {
        echo "Good Afternoon";
    }
    else if(date("H") > 17) {
        echo "Good Evening";
    }
?>