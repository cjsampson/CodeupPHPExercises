<?php

// Open contact-parser.php in Sublime and complete the function parseContacts()

function hyphenNumber($str, $insertStr, $pos) {
	$str = substr($str, 0, $pos) . $insertStr . substr($str, $pos);
	return $str;
}

function parseContacts($filename)
{
    $contacts = [];
    // todo - read file and parse contacts
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	$contentsArray = explode("\n", $contents);

	foreach($contentsArray as $key => $valueString) {
		$indexedArray = explode('|', $valueString);

		$hyphen1 = hyphenNumber($indexedArray[1], '-', 3);
		$hyphenedNum = hyphenNumber($hyphen1, '-', 7);

		$indexedArray = 
		$associativeArray = [
            'name' 	=> $indexedArray[0],
            'number' => $hyphenedNum
		];
		$contentsArray[$key] = $associativeArray;		
	}

	fclose($handle);

    return $contentsArray;

 	//$filename = 'cities.txt';
	// $handle = fopen($filename, 'r');
	// $contents = fread($handle, filesize($filename));
	// $contentsArray = explode("\n", $contents);
	// fclose($handle);
}



var_dump(parseContacts('contacts.txt'));
