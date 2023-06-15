<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM akun WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $result = $result->fetch_assoc();
        $_SESSION['email'] = $result['email'];
        $_SESSION['admin'] = true;
        $_SESSION['username'] = $result['username'];
        if ($result['email'] == 'admin@gmail.com') {
            header("Location: indexadmin.php");
        } else {
            header("Location: indexuser.php");
        }
        exit();
    } else {
        $error = "Invalid email or password";
        header("Location: login.php?error=$error");
        $_SESSION['error'] = "Invalid email or password";
        exit();
    }
}

$conn->close();
?>