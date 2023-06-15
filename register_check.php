<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Memeriksa apakah form masih kosong
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all the fields";
    } else {
        $checkSql = "SELECT * FROM login WHERE username = '$username' OR email = '$email'";
        $checkResult = $conn->query($checkSql);

        if ($checkResult->num_rows > 0) {
            echo "Username or email already exists";
        } else {
            $insertSql = "INSERT INTO akun (username, email, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($insertSql) === true) {
                echo "Registration successful";
                header("Location: login.php");
                exit();
            } else {
                echo "Registration failed: " . $conn->error;
            }
        }
    }

    $conn->close();
}
?>
