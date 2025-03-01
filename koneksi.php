<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "biodata";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn) {
    die("Error: ". mysqli_connect_error());
}
?>