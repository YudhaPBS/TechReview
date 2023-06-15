<?php
include 'koneksi.php';

// Ambil parameter klik dari URL
$kontenId = $_GET['konten_id'];

// Periksa apakah parameter ada dan valid
if (!$kontenId || !is_numeric($kontenId)) {
    die("ID konten tidak valid");
}

// Update jumlah klik di database
$query = "UPDATE konten SET jumlah_klik = jumlah_klik + 1 WHERE id = $kontenId";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Klik berhasil direkam";
} else {
    echo "Terjadi kesalahan saat merekam klik: " . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($conn);
?>
