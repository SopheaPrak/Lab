<?php
	$arr = ["dog" => "puppy", "cat" => "kitty", "chicken" => "chick", "duck" => "duck"];

	foreach ($arr as $val) {
		echo $val, "<br/>";
	}

	##########

	foreach ($arr as $ind => $val) {
		echo "baby of ", $ind, " is ", $val, "<br/>";
	}

	For ($i = 0; $i < 12; $i++) {
		if ($i == 5) {
			echo "Hello", "<br/>";
			continue;
			echo "Test";
		}
		if ($i == 10) {
			echo "Break";
			break;
		}
		echo "End of loop $1", "<br/>";
	}

	echo "<br/>";

	##########

	function myfunction($value, $key, $p) {
		echo "$key $p $value<br>";
	}
	$a = array("a" => "red", "b" => "green", "c" => "blue");
	array_walk($a, "myfunction", "has the value");

	echo "<br/>";

	##########

	$blog = 'Your Blog is Excellent';
	substr($blog, 1);

	$blog = 'Your Blog is Excellent';
	substr($blog, 0, 4);

	substr($blog, 5, -13);
?>