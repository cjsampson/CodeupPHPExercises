<?php

// read in the states.csv
// write an array of associative arrays where each state's abbreviation as a key and the name as a value 
// $states = [
//		[AL => Alabama],
//		[AK => Alaska],	
//		etc...
// ];


echo "Please input a filename.\n";
//set the file name
$filename = trim(fgets(STDIN));
//open the file, 'r' means reading only
$handle = fopen($filename, 'r');
// read contents from the handle to the end of the file
// content cmoe in as a single string
$contentString = fread($handle, filesize($filename));
// we need to close the file
fclose($handle);
// convert each line into an array of strings (explode returns a string)
$arrayOfStrings = explode(PHP_EOL, $contentString);

$arrayOfStates = [];

foreach($arrayOfStrings as $string) {
	$stateInfo = explode("," $string);
	$abbreviation = $stateInfo[0];
	$stateName = $stateInfo[1];
	$stateAssociativetiveArray[$abbreviation] = $stateName;
	$arrayOfStates[] = $stateAssociativeArray;
}

print_r($arrayOfStates);