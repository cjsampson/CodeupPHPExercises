<?php

function newString($str, $insertStr, $pos) {
	$str = substr($str, 0, $pos) . $insertStr . substr($str, $pos);
	return $str;
}