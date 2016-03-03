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

function humanizedString($original) {
	
}

