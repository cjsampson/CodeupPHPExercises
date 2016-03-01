<?php

for($x = 1; $x <=100; $x++) {
	$show = "";
	if($x % 3 == 0) {
    	echo "Fizz"; 
	}
	if($x % 5 == 0) {
		echo "Buzz";
	}
	echo ($show || $i);
}