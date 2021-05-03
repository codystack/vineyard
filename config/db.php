<?php
$conn = new mysqli('localhost', 'thevine1_mall', 'Webify2020!!', 'thevine1_mall');
// Turn on error reporting
error_reporting(E_ALL ^ E_NOTICE);
// Check database connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to database:" . mysqli_connect_error();
    exit();
}