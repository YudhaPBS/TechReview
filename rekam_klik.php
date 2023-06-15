<?php
include 'koneksi.php';

if (isset($_GET['konten_id']) && isset($_GET['nama_konten'])) {
    $konten_id = $_GET['konten_id'];
    $nama_konten = $_GET['nama_konten'];

    $selectQuery = "SELECT * FROM click WHERE id_konten = $konten_id AND nama_konten = '$nama_konten'";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        $updateQuery = "UPDATE click SET jumlah_click = jumlah_click + 1 WHERE id_konten = $konten_id AND nama_konten = '$nama_konten'";

        if ($conn->query($updateQuery) === TRUE) {
            echo "Jumlah klik berhasil diperbarui.";
        } else {
            echo "Terjadi kesalahan saat memperbarui jumlah klik: " . $conn->error;
        }
    } else {
        $insertQuery = "INSERT INTO click (id_konten, nama_konten, jumlah_click) VALUES ($konten_id, '$nama_konten', 1)";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Konten baru berhasil ditambahkan.";
        } else {
            echo "Terjadi kesalahan saat menambahkan konten baru: " . $conn->error;
        }
    }

    if ($konten_id == 1) {
        header("Location: ni-brand-Motorola Razr 40 Ultra.php");
        exit;
    } elseif ($konten_id == 2) {
        header("Location: ni-brand-Realme 11 Pro+.php");
        exit;
    } elseif ($konten_id == 3) {
        header("Location: ni-brand-vivo X Flip.php");
        exit;
    } elseif ($konten_id == 4) {
        header("Location: ni-brand-Poco F5 Pro.php");
        exit;
    } elseif ($konten_id == 5) {
        header("Location: ni-brand-Infinix Note 30.php");
        exit;
    } elseif ($konten_id == 6) {
        header("Location: ni-brand-Samsung Galaxy A24 4G.php");
        exit;
    } elseif ($konten_id == 7) {
        header("Location: ni-brand-Motorola Edge 40.php");
        exit;
    } else {
        header("Location: index.php");
        exit;
    }
}

$conn->close();
?>
