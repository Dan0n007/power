<?php

include "db.php";

$name = $_POST['name'];
$ageyear = $_POST['ageyear'];
$sel = $_POST['sel'];
$prod = $_POST['prod'];

$sql = "INSERT INTO pwerfilm (name, ageyear, sel, prod)
VALUES ('$name', '$ageyear','$sel','$prod')";

$conn->query($sql);

header("Location: /"); //Редирект

