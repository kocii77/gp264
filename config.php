<?php
$host = "localhost";
$user = "root"; // Default XAMPP username
$pass = "";     // Default XAMPP no password
$db   = "system_pelajar";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Sambungan gagal: " . mysqli_connect_error());
}
?>