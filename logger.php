<?php

// Log to a file named log-YYYY-MM-DD.log where the Y, M, and D values are the 4-digit year, 2-digit month, and 2-digit day that the log is taking place.

// If the log file for a given day does not yet exist, it should be created. If it already exists, it should be appended to.

// Newer logs should appear at the end of the log file.

// Log entries should match the format: YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE


function logMessage($logLevel, $message)
{
    // todo - complete this function
    $filename = 'log-YYYY-MM-DD.log';
    $handle = fopen('log-YYYY-MM-DD.log', 'a');
    $dateYmd = date('Y-m-d');
    $datehis = date('h:i:s');
    $logLevel = '[' . $logLevel . ']';
    $log = $dateYmd . ' ' . $datehis . ' ' . $logLevel . ' ' . $message;
    fwrite($handle, PHP_EOL . $log);
    fclose($handle);

    return $log;
}

function logError(){
	$log = logMessage('ERROR', 'This is an error message');
	return $log;
}

function logInfo(){
	$log = logMessage('INFO', 'This is an info message');
	return $log;
}

// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an info message.");
// logMessage("SOMETHING", "Another message");

logInfo();
logError();
	
?>

