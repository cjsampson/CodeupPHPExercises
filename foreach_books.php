<?php

// $numbers = [1 ,2, 3, 4, 5];
// foreach($numbers as $key => $value) {
// 	echo "\$value has a \$key of "
// }

// $studentDetails = [
// 	"name" => "Jane Doe",
// 	"age"  => 29
// ];

// foreach($studentDetails as $key => $value) {
// 	echo "Student's $key is $value\n";
// }

$books = [
	"Super Mind" => [
		"published" => 2016,
		"author"	=> "Norman Rosenthal",
		"pages"		=> 272
	], 


	"Art of Stress Free Living" => [
		"published" => 2010,
		"author"	=> "Sukhraj S. Dhillon",
		"pages"		=> 167
	],


	"How Not to Die" => [
		"published" => 2015,
		"author"	=> "Michael Gregor",
		"pages" 	=> 576
	],

	"Eloquent JavaScript" => [
		"published" => 2015,
		"author"	=> "Marjin Haverbeke",
		"pages" 	=> 451
	],

	"Don Quixote" => [
		"published" => 1605,
		"author"	=> "Miguel de Cervantes",
		"pages"		=> 928
	]
];

// Construct a loop that iterates through each book and then each book's keys and values. Have it output the book's title, then list the key value pairs for the data about each book.

foreach($books as $title => $book) {
	echo "{$title}:\n";
	foreach($book as $key => $value) {
		echo "\t$key - $value \n";
		// echo $title . " was $key['published'] in " . $value . "." ."\n";
		// echo 		 "The $key[author] is $value\n";
		// echo 		 "There are " . $key['pages'] . " in $book\n\n";
	}
}

// Update your loop to only show books that were written after 1950.

foreach($books as $title => $book) {
	if($book['published'] > 1950) {
		echo "{$title}:\n";
		foreach($book as $key => $value) {
			echo "\t$key - $value \n";
		}
	}
}