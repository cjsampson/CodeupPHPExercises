<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function findNameInArray($inputString, $arr) {
	$result = array_search($inputString, $arr);
	if($result !== false) {
		return true;
	} else {
		return false;
	}
}

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search()

function similiarValues($arr1, $arr2) {
	$count = 0;
	foreach($arr1 as $value) {
		if(findNameInArray($value, $arr2)) {
			$count++;
		}
	}
	return $count;
}

// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.
	// If the arrays have the same value at the same index, then it should only be added once.
	// If the values differ, then the value from the first array should be added and then the second.
	// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop()
 
function largest_array($arr1, $arr2) {
	if(count($arr1) >= count($arr2)) {
		return $arr1;
	} 
	return $arr2;
}

//[1,2,3]
//[1,2,5,1,6,7,3]

function removeDuplicate($arr, $uniqueItems){
	foreach($arr as $item){
		$isInArray = array_search($item, $uniqueItems);
		if($isInArray === false) {
			array_push($uniqueItems, $item);
		}
	}
	return $uniqueItems;
}

function combine_arrays($arr1, $arr2) {
	$combined = [];
	$combined = removeDuplicate($arr1, $combined);
	$combined = removeDuplicate($arr2, $combined);
	return $combined;
}

function combineArrays($arr1, $arr2){
	$new_array = [];
	foreach($arr1 as $index => $value) {
		if($value === $arr2[$index]) {
			array_push($new_array, $value);
		} elseif($value !== $arr2[$index]) {
			array_push($new_array, $value);
			array_push($new_array, $arr2[$index]);
		}
	}
	return $new_array;
}

	// end of second foreach


	// $largest = largest_array($arr1, $arr2);
	// $newArr = [];
	// for($i = 0; $i < count($largest); $i++) {
	// 	//if(isset($arr1[$i]))
	// 	  //else
	// 	if($arr1[$i] == $arr2[$i]) {
	// 		array_push($newArr, $arr1[$i]);
	// 	} elseif($arr1[$i] != $arr2[$i]) {
	// 		array_push($newArr, $arr1[$i]);
	// 		array_push($newArr, $arr2[$i]);
	// 	}
	// }
	// return $newArr;
