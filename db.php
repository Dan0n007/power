<?php

$username = "root";
$password = "";
$dbname = "pwerfilm";
$host = "localhost";


$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

