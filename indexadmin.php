<?php
session_start();
include("koneksi.php");

// SELECT DATA FROM DATABASE
$sql = "SELECT * FROM chart_hp";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM chart_news";
$result2 = $conn->query($sql2);


// get data result nama and counter from database, make a new variable X for nama Y for counter so it can be used in chart js
$nama = array();
$counter = array();
while ($row = mysqli_fetch_array($result)) {
    array_push($nama, $row['nama']);
    array_push($counter, $row['counter']);
}

//get data result judul and counter from database, make a new variable X for nama Y for counter so it can be used in chart js
$judul = array();
$counter2 = array();
while ($row2 = mysqli_fetch_array($result2)) {
    array_push($judul, $row2['judul']);
    array_push($counter2, $row2['counter']);
}

// implode nama and counter so it can be used in chart js
$nama = "'" . implode("','", $nama) . "'";
$counter = implode(",", $counter);

// implode judul and counter so it can be used in chart js
$judul = "'" . implode("','", $judul) . "'";
$counter2 = implode(",", $counter2);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TechReview</title>
    <script>
        function confirmNavigation() {
            var result = confirm("Anda perlu login terlebih dahulu untuk mengakses kursus ini. Lanjutkan ke halaman login?");
            if (result) {
                window.location.href = "#";
            } else {
                return false;
            }
        }
    </script>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="#">TechReview</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#review">Chart</a></li>
                    <br>
                    <li class="dropdown"><a href="#"><span><?php echo $_SESSION['username']; ?></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="index.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Mau Beli Smartphone Baru Tapi Bingung Mau Yang Mana?</h1>
                    <h2>TechReview Membantu Anda Untuk Memilih dan Membandingkan Smartphone Yang Ingin Anda Beli.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="https://youtu.be/IjN3FWoXHjQ" class="btn-get-started scrollto">Teknologi Viral</a>
                        <p>
                            <a href="https://youtu.be/IjN3FWoXHjQ" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End Cliens Section -->



        <!-- ======= Portfolio Section ======= -->
        <br>
        <section id="review" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Chart</h2>
                    <p>Di dunia teknologi, review adalah sahabat sejati, Menyuguhkan informasi yang berharga dan tak
                        terganti. Dari smartphone hingga laptop, semua ada di sini, Mari kita berkelana dan temukan yang
                        terbaik untuk kita..</p>
                    <button  class="btn btn-success text-white" onclick="exportToPDF()">Export data product to PDF</button>
                    <button  class="btn btn-success text-white" onclick="exportToPDF2()">Export data news to PDF</button>
                    <a class="btn btn-success text-white" href="download-excel copy.php">Export data product to Excel</a>
                    <a class="btn btn-success text-white" href="download-excel.php">Export data news to Excel</a>
                    <div class="row">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                        <br>
                        <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>

            </div>
            </div>
        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <br>
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Tech Review</h3>
                        <p>
                            Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur <br><br>
                            <strong>Phone:</strong> +62 813 9999 9999<br>
                            <strong>Email:</strong> techreview@gmail.com<br>
                        </p>
                    </div>





                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Kenal kami lebih dalam agar bisa mendapat informasi seputar Tech Review lebih cepat </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Tech Review</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saver/dist/FileSaver.min.js"></script>


    <script>
        var xValues = [<?php echo $nama ?>];
        var yValues = [<?php echo $counter ?>];
        var barColors = ["red", "green", "blue", "orange", "brown", "yellow", "purple"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Trend Product 2023"
                }
            }
        });
    </script>
    <script>
        function exportToPDF() {
            var element = document.getElementById('myChart2', );
            html2pdf()
                .set({
                    margin: 10,
                    filename: 'chart.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    }
                })
                .from(element)
                .save();
        }
    </script>
    <script>
        var xValues = [<?php echo $judul ?>];
        var yValues = [<?php echo $counter2 ?>];
        var barColors = ["red", "green", "blue", "orange", "brown", "yellow", "purple", "pink"];

        new Chart("myChart2", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Trend News 2023"
                }
            }
        });

        function exportToPDF2() {
            var element = document.getElementById('myChart2', );
            html2pdf()
                .set({
                    margin: 10,
                    filename: 'chart.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    }
                })
                .from(element)
                .save();
        }

        function exportChart2ToExcel() {
        var data = chart2.data;
        var workbook = XLSX.utils.book_new();
        var worksheetData = [];

        for (var i = 0; i < data.labels.length; i++) {
            worksheetData.push([data.labels[i], data.datasets[0].data[i]]);
        }

        var worksheet = XLSX.utils.aoa_to_sheet(worksheetData);
        XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet1");
        XLSX.writeFile(workbook, "chart_news.xlsx");
    }
    </script>
    <script>
        
    </script>
</body>

</html>