<?php
session_start();
include 'config.php';

// 1. Capture all data from the form
$nama     = $_POST['nama'];
$username = $_POST['username']; 
$email    = $_POST['email'];     // NEW: Capture the email
$password = $_POST['password'];
$peranan  = 'user'; 

// 2. Clean the data
$nama     = mysqli_real_escape_string($conn, $nama);
$username = mysqli_real_escape_string($conn, $username);
$email    = mysqli_real_escape_string($conn, $email);

// 3. Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 4. CHECK: Ensure the username OR email isn't already taken
$check_sql = "SELECT * FROM pengguna WHERE username='$username' OR email='$email'";
$check_result = mysqli_query($conn, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    echo "<script>
            alert('Ralat: Username atau Emel ini telah wujud! Sila gunakan yang lain.'); 
            window.location='register.php'; // Send them back to try again
          </script>";
} else {
    // 5. INSERT into the database matching your new column structure
    $sql = "INSERT INTO pengguna (nama, username, email, password, peranan) 
            VALUES ('$nama', '$username', '$email', '$hashed_password', '$peranan')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Pendaftaran Berjaya! Sila log masuk.');
                window.location='index.php';
              </script>";
    } else {
        echo "Ralat: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>