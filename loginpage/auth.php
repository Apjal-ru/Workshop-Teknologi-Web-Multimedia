<?php

// Koneksi ke database
$host = "localhost";
$users = "root";
$pass = "";
$db = "afzal_db";

$conn = mysqli_connect($host, $users, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    header("Location: login.php?error=Username atau password salah!");
}

mysqli_close($conn);
?>