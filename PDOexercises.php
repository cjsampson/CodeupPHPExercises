<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=employees', 'codeup', 'codeuppass');

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS);