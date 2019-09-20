<?php

$host = "localhost";
$login = "phpuser";
$password = "MySQL";
$database = "videogames_db";


$conn = @new mysqli($host, $login, $password, $database);

if ($conn->connect_errno) {
    $errno = $conn->connect_errno;
    $errmsg = $conn->connect_error;
    die("Your connection to database failed: ($errno) $errmsg.");
}
//for debug purpose
//echo "You are connected successfully <br>";
?>