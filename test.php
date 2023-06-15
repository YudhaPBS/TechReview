<!DOCTYPE html>
<html>
<head>
    <title>Contoh Website Pencatat Klik</title>
</head>
<body>
    <h1>Selamat datang di Contoh Website Pencatat Klik</h1>

    <?php
    include 'koneksi.php';
    $query = "SELECT * FROM konten";
    $result = mysqli_query($conn, $query);

    // Tampilkan daftar konten
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h3>" . $row['judul'] . "</h3>";
            echo "<p>Jumlah Klik: " . $row['jumlah_klik'] . "</p>";
            echo "<a href='log_click.php?konten_id=" . $row['id'] . "'>Klik Disini</a>";
            echo "<hr>";
        }
    } else {
        echo "Tidak ada konten yang tersedia.";
    }

    // Tutup koneksi database
    mysqli_close($conn);
    ?>

</body>
</html>
