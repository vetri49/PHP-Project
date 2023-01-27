<?php
$servername = "localhost";
$username = "lol";
$password = "987";
$dbname = "jin";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn===false) {
    die("Connection failed: ");
}

?>