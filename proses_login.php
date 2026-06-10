<?php
session_start(); // Start the session
include 'config.php'; // Call the DB connection file

// Capture data from the form via POST names
$username = $_POST['username'];
$password = $_POST['password'];

// Prevent basic SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Search for the user in the database
$sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // If user exists, fetch their data
    $row = mysqli_fetch_assoc($result);
    
    // Save info into Session variables
    $_SESSION['nama_pengguna'] = $row['nama'];
    $_SESSION['peranan'] = $row['peranan'];
    
    // Identify role and redirect to the correct dashboard
    if ($row['peranan'] == 'admin') {
        header("Location: admindashboard.php");
    } else {
        header("Location: dashboard.php");
    }
} else {
    // If login details are wrong or user doesn't exist
    echo "<script>alert('Username atau Password salah!'); window.location='index.php';</script>";
}
?>