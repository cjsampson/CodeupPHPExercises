<?php

// explode returns array (array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] ))
// implode returns string (string implode ( string $glue , array $pieces ))

// Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.  This should end with this line:

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// string to array
$physicistsArray = explode(', ', $physicistsString);
//take off Tony
$tony = array_pop($physicistsArray);

$physicistsString = implode(', ', $physicistsArray);

$fullString = $physicistsString . " and " . $tony . ".";

echo $fullString;

// Turn your solution into a function named humanizedList(). You should be able to pass the $physicistsArray as the only parameter, and your function will return the result.

function humanizedString($originalArray) {
	$lastItemOfOriginal = array_pop($originalArray);
	return implode(", ", $originalArray) . " and " . $lastItemOfOriginal . ".";
}

echo humanizedString($physicistsArray);



