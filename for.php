<?php 


fwrite(STDOUT, "Pick a starting number: \n");
$userStartNum = fgets(STDIN);

fwrite(STDOUT, "Pick a ending number: \n");
$userEndNum = fgets(STDIN);

for($i = $userStartNum; $i < is_numeric($userEndNum - $userStartNum); $i++) {
	fwrite(STDOUT, $i);
}

