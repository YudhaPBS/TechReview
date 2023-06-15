<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $newPassword = $_POST['new_password']; // Mengambil kata sandi baru yang diinput oleh pengguna

    $checkSql = "SELECT * FROM login WHERE email = '$email' AND username = '$username'";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        // Update password baru ke database
        $updateSql = "UPDATE login SET password = '$newPassword' WHERE email = '$email' AND username = '$username'";
        if ($conn->query($updateSql) === TRUE) {
            echo "Password updated successfully";
        } else {
            echo "Error updating password: " . $conn->error;
        }

        echo "Reset password email sent";
        header("Location: login.php");
        exit();
    }
}
?>
