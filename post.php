<?php

$name = $_POST['name'];
$ageyear = $_POST['ageyear'];
$sel = $_POST['sel'];
$prod = $_POST['prd'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwerfilm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pwerfilm (name, ageyear, sel, prod)
VALUES ('$name', '$ageyear','$sel','$prod')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Гуд))" . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>