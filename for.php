<?php 


fwrite(STDOUT, "Pick a starting number: \n");
$userStartNum = (int)fgets(STDIN);

fwrite(STDOUT, "Pick a ending number: \n");
$userEndNum = (int)fgets(STDIN);

fwrite(STDOUT, "Please choose an incrementing number: \n");
$userIncremnetNum = (int)fgets(STDIN);

for($i = $userStartNum; $i < ($userEndNum - $userStartNum); $i+=($userIncrementNum)) {
	fwrite(STDOUT, $i);
}

