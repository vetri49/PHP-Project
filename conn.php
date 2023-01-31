<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn===false) {
    die("Connection failed: ");
}

?>
