<?php 

$number = 2;
do {
	echo $number."\n";
	$number+=2;
} while($number <= 100);

$number = 100;
do {
	echo $number."\n";
	$number-=5;
} while($number >= -10);

$number = 2;
do {
	echo $number."\n";
	$number*=$number;
} while($number < 1000000);